<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //update status to inactive(0) when soft delete
    public function updateStatusOnDelete ($id){        
        //get form model user.php
        $data=User::find($id);
        $data->status = 0;
        $data->update();

    }

    //soft delete controller
    public function delete ($id){        
        //call updateStatusOnDelete
        UserController::updateStatusOnDelete($id);
        $data=User::find($id);
        $data->delete();
        
        return redirect('/tablePage');

    }


}
