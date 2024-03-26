<?php

use App\Models\Language;
use App\Models\PricingPlan;
use App\Models\GeneralSetting;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

function generalSetting($name)
{
  $setting = GeneralSetting::where('name', $name)->first();
  return $setting->value;
}

// getImageUrl 
function getImageURL($directory, String $image)
{
  if (isset($image) && ($image != '') && file_exists($directory . $image)) {
    return url($directory . $image);
  } elseif (isset($image) && ($image != '') && file_exists('public/' . $directory . $image)) {
    return url('public/' . $directory . $image);
  } else {
    return url('frontend/images/default-300x200.png');
  }
}

function uploadQrInfoFile($image, $dir)
{
  $filename = time() . '_' . $image->getClientOriginalName();
  $path = public_path($dir);
  $image->move($path, $filename);
  return $filename;
}

// uploadImage 
function uploadImage($image, $directory)
{
  $filename = time() . '_' . $image->getClientOriginalName();
  $path = public_path($directory);
  $img = Image::make($image->path());
  $img->fit(400, 300, function ($constraint) {
    $constraint->aspectRatio();
  })->save($path . '/' . $filename);
  // Storing Original Imgae 
  $image->move(public_path('img/original'), $filename);
  return $filename;
}


// Expired Date Asia/Yangon time zone
function getTodayFormattedDate()
{
  $formatDate = now()->format('Y-m-d H:i:s');
  return $formatDate;
}

function getFormattedDate($date)
{
  $newdate = Carbon::parse($date)->format('d/m/Y');
  return $newdate;
}

function formatNumber($number) {
  $formatNumber = number_format($number, 2, '.', ',');
  return $formatNumber;
}

function extractAndCapitalizeName($name) {
      $parts = explode("-", $name);
      if (isset($parts[0])) {
          $capitalizedName = ucfirst($parts[0]); // Capitalize the first letter
          return $capitalizedName;
      }
  }

function extractUSDT($name) {
  $formatName = $name == "usdt" ? "USDT" : strtoupper(substr($name, 0, strpos($name, 'usdt')));
  return $formatName;
}

// form status
function mapCommunication($value) {
  switch ($value) {
      case 0:
          return 'Very Good';
      case 1:
          return 'Good';
      case 2:
          return 'Normal';
      case 3:
          return 'Bad';
      case 4:
          return 'Very Bad';
      default:
          return 'Unknown';
  }
}
