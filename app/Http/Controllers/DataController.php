<?php

namespace App\Http\Controllers;

use App\Services\HemisService;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Request;

class DataController extends Controller
{
    protected HemisService $hemisService;

    public function __construct(HemisService $hemisService)
    {
        $this->hemisService = $hemisService;
    }

    /**
     * @OA\Get(
     *     tags={"DATA"},
     *     path="/api/v1/data",
     *     summary="Return data",
     *     description="Return data desc",
     *     operationId="getData",
     *     @OA\Response(response="200", description="Display a listing of posts.")
     *  )
     */
    public function index(): array
    {
        return $this->hemisService->getAll();
    }

    /**
     * @OA\Get(
     *     tags={"DATA"},
     *     path="/api/v1/data/groups",
     *     summary="Return group list",
     *     description="Return data desc",
     *     operationId="getGroupList",
     *     @OA\Response(response="200", description="Display a listing of posts.")
     *  )
     * @throws ConnectionException
     */
    public function groupList(): array
    {
        return $this->hemisService->groupList();
    }


    /**
     * @OA\Get(
     *     tags={"DATA"},
     *     path="/api/v1/data/students",
     *     summary="Return student list",
     *     description="Return data desc",
     *     operationId="getStudentList",
     *     @OA\Response(response="200", description="Display a listing of posts.")
     *  )
     * @throws ConnectionException
     */
    public function studentList(){
        return $this->hemisService->studentList();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
