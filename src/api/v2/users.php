<?php

use Slim\Http\Request;
use Slim\Http\Response;
use WebDrinkAPI\Utils\API;
use WebDrinkAPI\Utils\LDAP;
use WebDrinkAPI\Utils\OIDC;

/**
 * GET /users/credits/:uid - Get a user's drink credit balance (drink admin only if :uid != your uid)
 */
$app->get('/credits/{uid}', function (Request $request, Response $response) {
    $uid = $request->getAttribute('uid');
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);
    $ldap = new LDAP();

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * POST /users/credits/:uid/:value/:type - Update a user's drink credit balance (drink admin only)
 */
$app->post('/credits/{uid}', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * GET /users/search/:uid - Search for usernames that match the search :uid
 */
$app->get('/search/{uid}', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * GET /users/info/:uid/:ibutton - Get a user's info (uid, username, common name, credit balance, and ibutton value)
 */
$app->get('/info/{uid}/{ibutton}', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * GET /users/drops/:limit/:offset/:uid - Get the drop logs for a single or all users
 */
$app->get('/drops/{limit}/{offset}/{uid}', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * GET /users/apikey - Get your API key (Auth Only)
 */
$app->get('/apikey', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * POST /users/apikey - Generate a new API key for yourself (Auth Only)
 */
$app->post('/apikey', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});

/**
 * DELETE /users/apikey - Delete your current API key (Auth Only)
 */
$app->delete('/apikey', function (Request $request, Response $response) {
    //TODO

    // Creates an API object for creating returns
    $api = new API(2);

    return $response->withJson($api->result(true, "TODO", true), 200, JSON_PRETTY_PRINT);
});