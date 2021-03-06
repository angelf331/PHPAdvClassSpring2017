<?php

include_once './autoload.php';

/*
 * The Rest server is sort of like the page is hosting the API
 * When a user calls the page (By url(HTTP), CURL, JavaScript etc.), the server(this Page) will handle the request.
 */
$restServer = new RestServer();

try {

    $restServer->setStatus(200);

    $resource = $restServer->getResource();
    $verb = $restServer->getVerb();
    $id = $restServer->getId();
    $serverData = $restServer->getServerData();

    $resourceUCName = ucfirst($resource);
    $resourceClassName = $resourceUCName . 'Resource';



    try {
        $resourceData = new $resourceClassName();
    } catch (InvalidArgumentException $e) {
        throw new InvalidArgumentException($resource . ' Resource Not Found');
    }


    if ('GET' === $verb) {

        if (NULL === $id) {

            $restServer->setData($resourceData->getAll());
        } else {

            $restServer->setData($resourceData->get($id));
        }
    }

    if ('POST' === $verb) {


        if ($resourceData->post($serverData)) {
            $restServer->setMessage($resourceUCName . 'Added');
            $restServer->setStatus(201);
        } else {
            throw new Exception($resourceUCName . 'could not be added');
        }
    }


    if ('PUT' === $verb) {

        if (NULL === $id) {
            throw new InvalidArgumentException('Corps ID ' . $id . ' was not found');
        }
        else{
            $results = $resourceData->put($serverData, $id);
        }
    }
    if ('DELETE' === $verb) {

        if (NULL === $id) {
            throw new InvalidArgumentException('Corps ID ' . $id . ' was not found');
        }
        else{
            
        }
    }




    /* 400 exeception means user sent something wrong */
} catch (InvalidArgumentException $e) {
    $restServer->setStatus(400);
    $restServer->setErrors($e->getMessage());
    /* 500 exeception means something is wrong in the program */
} catch (Exception $ex) {
    $restServer->setStatus(500);
    $restServer->setErrors($ex->getMessage());
}


echo $restServer->getReponse();
exit();
