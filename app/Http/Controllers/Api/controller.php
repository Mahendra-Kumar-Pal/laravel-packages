<?php
    namespace App\Http\Controllers\Api;

    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Freelace API Documentation",
     *      description="Freelance API Documentation",
     *      @OA\Contact(
     *          email="admin@admin.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="Test API Server"
     * )
     *
     *  @OA\SecurityScheme(
     *    securityScheme="bearerAuth",
     *    in="header",
     *    name="bearerAuth",
     *    type="http",
     *    scheme="bearer",
     *    bearerFormat="JWT",
     * ),
     */
    class controller{

    }
?>