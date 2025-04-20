<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseAdvController;
use App\Http\Controllers\Admin\CourseAdvReviewsController;
use App\Http\Controllers\Admin\InstituteController;
use App\Http\Controllers\Admin\NotificationController;
//
use App\Http\Controllers\Institute\CategoryInstituteController;

use App\Http\Controllers\Institute\InstituteMainController;
use App\Http\Controllers\Institute\CourseAdvInstituteController;
use App\Http\Controllers\Institute\CourseAdvReviewsInstituteController;
use App\Http\Controllers\MasterCategoryController;
use App\Http\Controllers\MasterCourseAdvController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserMainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//  user routing
// Route::get('/user', function () {
//     return view('user_dashboard');
// })->middleware(['auth', 'verified','rolemanager:user'])->name('dashboard');
// //

// admin routing
Route::middleware(['auth', 'verified' ,'rolemanager:admin'])->group(function () {
    Route::prefix('admin')->group(function () {



//

    Route::controller(AdminMainController::class)->group(function () {

          Route::get('/admin_dashboard' , 'index')->name('admin');
          Route::get('/settings' , 'settings')->name('admin_settings');

          Route::get('/manage/manage_students' , 'manage_students')->name('admin_manage_students');
          Route::get('/manage/manage_institutes' , 'manage_institutes')->name('admin_manage_institutes');
          Route::get('/manage/manage_notifications' , 'manage_notifications')->name('admin_manage_notifications');
    });



//
    Route::controller(CategoryController::class)->group(function () {

          Route::get('/category/create_category' , 'create_category')->name('admin.create_category');
          Route::get('/category/manage' , 'manage')->name('manage_category');

     });
//
     Route::controller(CourseAdvController::class)->group(function () {

        Route::get('/course_adv/create_course_adv' , 'index')->name('admin.create_course_adv');
        Route::get('/course_adv/manage_course_adv' , 'manage_course_adv')->name('admin.manage_course_adv');

    });
//

    Route::controller(CourseAdvReviewsController::class)->group(function () {

        Route::get('/course_adv_review/create_course_adv_review' , 'index')->name('create_course_adv_review');
        Route::get('/course_adv_review/manage' , 'manage')->name('course_adv_review.manage');

    });

//
   Route::controller(InstituteController::class)->group(function () {

    // Route::get('/institute/manage_institute' , 'manage_institute')->name('manage_institute');
    Route::get('/institute/verify_institute' , 'verify_institute')->name('verify_institute');
    Route::get('/institute/add_institute' , 'add_institute')->name('add_institute');

    });
//
Route::controller(NotificationController::class)->group(function () {

    Route::get('/notification/create_notification' , 'create_notification')->name('create_notification');
  //  Route::get('/notification/verify_institute' , 'verify_institute')->name('institute.verify');

    });


    //
    Route::controller(MasterCategoryController::class)->group(function () {
        Route::post('/store/category', 'store_cat')->name('store.cat');
        Route::get('/category/{id}' , 'show_cat')->name('show.cat');
        Route::put('/category/update/{id}' , 'update_cat')->name('update.cat');
        Route::delete('/category/delete/{id}' , 'delete_cat')->name('delete.cat');

        });

//
   //
   Route::controller(MasterCourseAdvController::class)->group(function () {
        Route::post('/store/course_adv', 'store_course_adv')->name('store.course_adv');
        Route::get('/course_adv/{id}' , 'show_course_adv')->name('show.course_adv');
        Route::put('/course_adv/update/{id}' , 'update_course_adv')->name('update.course_adv');
        Route::delete('/course_adv/delete/{id}' , 'delete_course_adv')->name('delete.course_adv');


     });

     //

});
});




//
// Route::get('/admin/dashboard', function () {
//     return view('admin.admin');
// })->middleware(['auth', 'verified' ,'rolemanager:admin'])->name('admin');
//

// institute routing

Route::middleware(['auth', 'verified' ,'rolemanager:institute'])->group(function () {
    Route::prefix('institute')->group(function () {



//
    Route::controller(InstituteMainController::class)->group(function () {

          Route::get('/dashboard' , 'index')->name('institute');
          Route::get('/institute_settings' , 'institute_settings')->name('institute_settings');
          Route::get('/institute_profile' , 'institute_profile')->name('institute_profile');

    });

    Route::controller(CategoryInstituteController::class)->group(function () {

        Route::get('/category/create_category' , 'index')->name('institute.create_category');
        Route::get('/category/manage' , 'manage')->name('institute.manage_category');

   });
//
   Route::controller(CourseAdvInstituteController::class)->group(function () {

      Route::get('/course_adv/create_course_adv' , 'index')->name('institute.create_course_adv');
      Route::get('/course_adv/manage' , 'manage')->name('institute.manage_course_adv');

  });
//

  Route::controller(CourseAdvReviewsInstituteController::class)->group(function () {

      Route::get('/course_adv_review/create_course_adv_review' , 'index')->name('institute.create_course_adv_review');
      Route::get('/course_adv_review/manage' , 'manage')->name('institute.course_adv_review.manage');

  });



// //
  Route::controller(MasterCategoryController::class)->group(function () {
    Route::post('/store/category', 'store_cat')->name('store.cat');
    Route::get('/category/{id}' , 'show_cat')->name('show.cat');
    Route::put('/category/update/{id}' , 'update_cat')->name('update.cat');
    Route::delete('/category/delete/{id}' , 'delete_cat')->name('delete.cat');

    });

//
//
Route::controller(MasterCourseAdvController::class)->group(function () {
    Route::post('/store/course_adv', 'store_course_adv')->name('store.course_adv');
    Route::get('/course_adv/{id}' , 'show_course_adv')->name('show.course_adv');
    Route::put('/course_adv/update/{id}' , 'update_course_adv')->name('update.course_adv');
    Route::delete('/course_adv/delete/{id}' , 'delete_course_adv')->name('delete.course_adv');


 });

 //

//
});
});


// // // // //

// user routing


Route::middleware(['auth', 'verified' ,'rolemanager:user'])->group(function () {
    Route::prefix('user')->group(function () {



//
    Route::controller(UserMainController::class)->group(function () {

          Route::get('/user_profile' , 'index')->name('dashboard');
          Route::get('/user_dashboard' , 'user_dashboard')->name('user_dashboard');
          Route::get('/user_settings' , 'user_settings')->name('user_settings');
          Route::get('/user_following' , 'user_following')->name('user_following');
          Route::get('/user_history' , 'user_history')->name('user_history');
          Route::get('/user_course_adv_marked' , 'user_course_adv_marked')->name('user_course_adv_marked');


    });

//     Route::controller(CategoryInstituteController::class)->group(function () {

//         Route::get('/category/create_category' , 'index')->name('create_category');
//         Route::get('/category/manage' , 'manage')->name('manage_category');

//    });
// //
//    Route::controller(CourseAdvInstituteController::class)->group(function () {

//       Route::get('/course_adv/create_course_adv' , 'index')->name('create_course_adv');
//       Route::get('/course_adv/manage' , 'manage')->name('manage_course_adv');

//   });
// //

//   Route::controller(CourseAdvReviewsInstituteController::class)->group(function () {

//       Route::get('/course_adv_review/create_course_adv_review' , 'index')->name('create_course_adv_review');
//       Route::get('/course_adv_review/manage' , 'manage')->name('course_adv_review.manage');

//   });




//
});
});


// // // // //


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
