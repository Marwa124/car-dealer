<?php

function apiResponse($status, $message, $data = null) {
  $response = [
      'status' => $status,
      'message' => $message,
      'data' => $data
  ];

  return response()->json($response);
}

function pagePagination($array)
{
  $current_page = $array->currentPage($array)-1;
  $per_page = $array->perPage($array);
  $total = $current_page * $per_page;
  return $total;
}
