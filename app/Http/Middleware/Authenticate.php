<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
  /**
   * Get the path the user should be redirected to when they are not authenticated.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return string
   */
  protected function redirectTo($request)
  {
    if (Auth::guard('guru')->check()) {

      return redirect('/guru');

    } else if (Auth::guard('siswa')->check()) {

      return redirect('/siswa');
      
    } else if (Auth::guard('admin')->check()) {

      return redirect('/admin');
      
    }
  }
}