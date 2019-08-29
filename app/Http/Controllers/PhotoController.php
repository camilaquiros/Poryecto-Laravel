<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\User;
use App\Pet;
use Auth;

class PhotoController extends Controller
{

  public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {
      $user = Auth::user();
      $photos = Pet::where("user_id", "=", $user->id)->orderby('id', 'desc')->get();
      return view('petsProfile', compact('user', 'photos'));
    }

  public function uploadForm()
{
return view('petsProfile');
}
public function uploadSubmit(Request $request)
{
$this->validate($request, [
'photos'=>'required',
]);
if($request->hasFile('photos'))
{
$allowedfileExtension=['jpg','jpeg','png'];
$files = $request->file('photos');
foreach($files as $file){
$filename = $file->getClientOriginalName();
$extension = $file->getClientOriginalExtension();
$check=in_array($extension,$allowedfileExtension);

if($check)
{
$user = Auth::user();
foreach ($request->photos as $photo) {
$filename = $photo->store('public/mascotas');

Pet::create([
'photo' => $filename,
'user_id' => $user->id,
]);
}
echo "Upload Successfully";
}
else
{
echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
}
}
}
}
}
?>
