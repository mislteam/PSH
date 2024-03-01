<?php

namespace App\Http\Controllers;

use App\Models\Notify;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function successMessage($data, $message, $redirect = null)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'success' => true,
            'redirect' => $redirect,
        ]);
    }

    public function errorMessage($message = 'Something Wrong')
    {
        return response()->json([
            'data' => [],
            'message' => $message,
            'success' => false,
        ]);
    }

    public function createNotify($notifyData)
    {

        $notify =   Notify::create([
            'user_id' => $notifyData['user_id'],
            'subject' => $notifyData['subject'],
            'description' => $notifyData['description'],
            'link' => $notifyData['link'] ?? "",
        ]);

        if ($notify) {
            return $this->successMessage($notify, 'Notify created successfully');
        } else {
            return $this->errorMessage('Failed to create Notify');
        }
    }
}
