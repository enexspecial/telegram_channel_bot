<?php

namespace App\Api\V1\Controllers;
use App\Http\Controllers\Controller;


/**
 * Class Controller
 * @package App\Http\Controllers
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Telegram Chat Bot",
 *         @OA\License(name="MIT")
 *     ),
 *     @OA\Server(
 *         description="API server",
 *         url="http://api.laravel-swagger-tutorial.test/",
 *     ),
 * )
 */

class TelegramController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


        /**
     * @OA\Post(
     *     path="/posts",
     *     summary="New blog post",
     *     operationId="store",
     *     tags={"Post"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Post object",
     *         @OA\JsonContent(ref="#/components/schemas/PostRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A post",
     *         @OA\JsonContent(ref="#/components/schemas/PostResponse"),
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\Schema(ref="#/components/schemas/Error")
     *     )
     * )
     * @param Request $request
     * @return array
     */

    //

    public function subscribeUsersChatBot()
    {

    }

            /**
     * @OA\Post(
     *     path="/posts",
     *     summary="New blog post",
     *     operationId="store",
     *     tags={"Post"},
     *     @OA\RequestBody(
     *         required=true,
     *         description="Post object",
     *         @OA\JsonContent(ref="#/components/schemas/PostRequest")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="A post",
     *         @OA\JsonContent(ref="#/components/schemas/PostResponse"),
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="unexpected error",
     *         @OA\Schema(ref="#/components/schemas/Error")
     *     )
     * )
     * @param Request $request
     * @return array
     */

     public function subscribeUserToChannel()
     {

     }







}
