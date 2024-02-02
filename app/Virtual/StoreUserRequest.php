<?php

namespace App\Virtual;
/**
 * @OA\Schema(
 *      title="Create User Request1",
 *      description="Create User Request2",
 *      type="object",
 *      required={"name", "email", "password"}
 * )
 */

class StoreUserRequest
{
    /**
     * @OA\Property(
     *      title="name",
     *      example="Ram",
     *      description="User's name"
     * )
     *
     * @var string
     */
    public $name;

    /**
     * @OA\Property(
     *      title="email",
     *      example="ram@gmail.com",
     *      description="User's email"
     * )
     *
     * @var integer
     */
    public $email;
    /**
     * @OA\Property(
     *      title="password",
     *      example="password",
     *      description="User's password"
     * )
     *
     * @var string
     */
    public $password;
}
