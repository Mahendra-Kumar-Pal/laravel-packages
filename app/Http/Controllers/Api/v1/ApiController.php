<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *  @OA\Get(
     *      operationId="get-all-users",
     *      tags={"User's-Record"},
     *      path="/api/users",
     *      summary="get all user's record",
     *      description="All User's Records",
     *      @OA\Response(
     *          response=200,
     *          description="All users fetched successfully"
     *      )
     *  )
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *  @OA\Post(
     *      operationId="create-user",
     *      tags={"User's-Record"},
     *      path="/api/users",
     *      summary="add new user record",
     *      description="Create New User",
     *      @OA\RequestBody(
     *          required=true,
     *          @OA\JsonContent(
     *              ref="#/components/schemas/StoreUserRequest"
     *          )
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="User Record Added Successfully"
     *      )
     *  )
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|alpha',
            'email'=>'required|email',
            'password'=>'required|string'
        ]);
        $user=new User();
        $data=[
            $user->name=$request->name,
            $user->email=$request->email,
            $user->password=Hash::make($request->password),
        ];
        $user->save($data);
        $id=$user->id;
        $user=User::find($id);
        return \response()->json([
            $user
        ]);
    }

    /**
     * Display the specified resource.
     *  @OA\Get(
     *      operationId="get-specific-user-record",
     *      tags={"User's-Record"},
     *      path="/api/singleUser/{id}",
     *      summary="get specific user's record",
     *      description="Get Specific User's Record",
     *      @OA\Parameter(
     *          name="id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Record Fetched Successfully"
     *      )
     *  )
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return \response()->json([
            User::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *  @OA\Post(
     *      operationId="update-user",
     *      tags={"User's-Record"},
     *      path="/api/update/{id}",
     *      summary="update specific user",
     *      description="Update Specific User",
     *      @OA\Parameter(
     *          name="id",
     *          description="user_id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *            mediaType="multipart/form-data",
    *            @OA\Schema(
    *               type="object",
    *               @OA\Property(
    *                   property="name", 
    *                   type="text",
    *                   required={"name"},
    *                   description="name is required"
     *               ),
    *               @OA\Property(
    *                   required={"email"},
    *                   property="email", 
    *                   type="email"
     *               ),
    *            ),
    *          ),
     *     ),
     *      @OA\Response(
     *          response=202,
     *          description="Record Updated Successfully"
     *      )
     *  )
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = $this->validate($request, [
            'name'=>'alpha',
            'email'=>'email',
            'password'=>'string'
        ]);
        $user=User::find($id)->first();
        $data=[
            $user->name=$request->name,
            $user->email=$request->email,
        ];
        $user->save($data);
        $id=$user->id;
        $user=User::find($id);
        return \response()->json([
            $user
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
    // *      @OA\RequestBody(
    // *         @OA\MediaType(
    // *            mediaType="multipart/form-data",
    // *            @OA\Schema(
    // *               type="object",
    // *               required={"image"},
    // *               @OA\Property(property="image", type="file"),
    // *            ),
    // *        ),
    // *     ),
}
