<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if (Auth::check()) {
            $activity = '';

            // Retrieve the route name
            $routeName = $request->route()->getName();

            // Determine the activity based on the request path or action type
            switch ($routeName) {
            // activy log message

                // login & register
                case 'login':
                    $activity = 'Logged in';
                    break;
                case 'register':
                    $activity = 'Registered';
                    break;
                // login & register

                // product
                case 'product.store':
                    $activity = 'Product Created';
                    break;
                case 'product.delete':
                    $activity = 'Product Deleted';
                    break;
                case 'product.update':
                    $activity = 'Product Updated';
                    break;
                // product

                // product category
                case 'productcategory.store':
                    $activity = 'Product-Category Created';
                    break;
                case 'productcategory.update':
                    $activity = 'Product-Category Updated';
                    break;
                case 'productcategory.delete':
                    $activity = 'Product-Category Deleted';
                    break;
                // product category
                
                // product type
                case 'producttype.store':
                    $activity = 'Product-Type Created';
                    break;
                case 'producttype.update':
                    $activity = 'Product-Type Updated';
                    break;
                case 'producttype.delete':
                    $activity = 'Product-Type Deleted';
                    break;
                // product type

                // product sub category
                case 'productsubcategory.store':
                    $activity = 'Product-Sub-Category Created';
                    break;
                case 'productsubcategory.update':
                    $activity = 'Product-Sub-Category Updated';
                    break;
                case 'productsubcategory.delete':
                    $activity = 'Product-Sub-Category Deleted';
                    break;
                // product sub category

                // product brand
                case 'productbrand.store':
                    $activity = 'Product-brand Created';
                    break;
                case 'productbrand.update':
                    $activity = 'Product-brand Updated';
                    break;
                case 'productbrand.delete':
                    $activity = 'Product-brand Deleted';
                    break;
                // product brand

                // Products User Support
                case 'usersupport.store':
                    $activity = 'Product-User-Support Created';
                    break;
                case 'usersupport.update':
                    $activity = 'Product-User-Support Updated';
                    break;
                case 'usersupport.delete':
                    $activity = 'Product-User-Support Deleted';
                    break;
                // Products User Support

                // Products Technical Support
                case 'techsupport.store':
                    $activity = 'Product-Technical-Support Created';
                    break;
                case 'techsupport.update':
                    $activity = 'Product-Technical-Support Updated';
                    break;
                case 'techsupport.delete':
                    $activity = 'Product-Technical-Support Deleted';
                    break;
                // Products User Support

                // Project category
                case 'project-category.store':
                    $activity = 'Project-Category Created';
                    break;
                case 'project-category.update':
                    $activity = 'Project-Category Updated';
                    break;
                case 'project-category.delete':
                    $activity = 'Project-Category Deleted';
                    break;
                // Project category

                // Project sub category
                case 'project-sub-category.store':
                    $activity = 'Project-Sub-Category Created';
                    break;
                case 'project-sub-category.update':
                    $activity = 'Project-Sub-Category Updated';
                    break;
                case 'project-sub-category.delete':
                    $activity = 'Project-Sub-Category Deleted';
                    break;
                // Project sub category

                // Projects
                case 'project.store':
                    $activity = 'Project Created';
                    break;
                case 'project.update':
                    $activity = 'Project Updated';
                    break;
                case 'project.delete':
                    $activity = 'Project Deleted';
                    break;
                // Projects

                // news category
                case 'new-category.store':
                    $activity = 'News-Category Created';
                    break;
                case 'new-category.update':
                    $activity = 'News-Category Updated';
                    break;
                case 'new-category.delete':
                    $activity = 'News-Category Deleted';
                    break;
                // news category

                // news 
                case 'news.store':
                    $activity = 'News Created';
                    break;
                case 'news.update':
                    $activity = 'News Updated';
                    break;
                case 'news.delete':
                    $activity = 'News Deleted';
                    break;
                // news

                // Customer Feedback Form 
                case 'feedback.delete':
                    $activity = 'Customer-Feedback-Form Deleted';
                    break;
                // Customer Feedback Form

                // Contact Form 
                case 'contactform.delete':
                    $activity = 'Contact-Form Deleted';
                    break;
                // Contact Form

                // Customer testimonial Form
                case 'changeTestimonialState':
                    $activity = 'Customer-Testimonial-Form State Change';
                    break;
                // Customer testimonial Form
                
                // Users 
                case 'userStore':
                    $activity = 'User Created';
                    break;
                case 'changeUserState':
                    $activity = 'User Status Change';
                    break;
                // Users

                // Home page 
                case 'home.store':
                    $activity = 'Home Page Slide Created';
                    break;
                case 'home.update':
                    $activity = 'Home Page Slide Updated';
                    break;
                // Home page

                // home about page
                case 'homeabout.update':
                    $activity = 'Home About Page Updated';
                    break;
                // home about page

                // Home About Counter
                case 'aboutcounter.update':
                    $activity = 'Home About Counter Page Updated';
                    break;
                // Home About Counter

                // specialization
                case 'special.update':
                    $activity = 'Home Specialization Page Updated';
                    break;
                // specialization

                // Specialization Card Page
                case 'card.update':
                    $activity = 'Home Specialization Card Page Updated';
                    break;
                // Specialization Card Page

                 // Our customer 
                case 'ourcustomer.store':
                    $activity = 'Our customer Created';
                    break;
                case 'ourcustomer.update':
                    $activity = 'Our customer Updated';
                    break;
                case 'ourcustomer.delete':
                    $activity = 'Our customer Deleted';
                    break;
                // Our customer

                // Company Policy
                case 'about.companypolicyupdate':
                    $activity = 'Company Policy Updated';
                    break;
                // Company Policy

                // about Company
                case 'companys.store':
                    $activity = 'About Us Company Created';
                    break;
                case 'about.companyupdate':
                    $activity = 'About Us Company Updated';
                    break;
                // about Company

                // Company Detail
                case 'about.companydetailupdate':
                    $activity = 'About Us Company Detail Updated';
                    break;
                // Company Detail

                // Company founder
                case 'about.companyfounderupdate':
                    $activity = 'About Us Company Founder Updated';
                    break;
                // Company founder

                // Company milestone
                case 'milestone.store':
                    $activity = 'Company milestone Created';
                    break;
                case 'milestone.update':
                    $activity = 'Company milestone Updated';
                    break;
                // Company milestone

                // contact us 
                case 'contact.update':
                    $activity = 'Company Contact Updated';
                    break;
                // contact us 
                
                // our branch
                case 'ourbranch.update':
                    $activity = 'Our Branch Updated';
                    break;
                // our branch

                // Header
                case 'header.update':
                    $activity = 'Company Header Updated';
                    break;
                // Header

                // Footer
                 case 'footer.update':
                    $activity = 'Company Footer Updated';
                    break;
                // Footer

                // Account Setting
                case 'accountUpdate':
                    $activity = 'Account Password Updated';
                    break;
                case 'accountInformationupdate':
                    $activity = 'Account Information Updated';
                    break;
                // Account Setting

                 // General Setting
                 case 'grantPermission':
                    $activity = 'Permission Updated';
                    break;
                case 'generalUpdate':
                    $activity = 'General Setting Updated';
                    break;
                // General Setting

                 // forum
                 case 'PostStore':
                    $activity = 'Forum Category Created';
                    break;
                case 'PostUpdate':
                    $activity = 'Forum Category Updated';
                    break;
                // forum

                // Add more cases for other actions as needed
                default:
                    // // Use a generic activity if none of the specific cases match
                    // $activity = 'Performed an action';
                    // break;
            }
        }

        if (!empty($activity)) {
            if (Auth::id() == 1 || 2) {
                ActivityLog::create([
                    'user_id' => Auth::id() ,
                    'activity' => $activity,
                    'description' => $request->getPathInfo(), // You can customize this based on the activity
                ]);
            }
          
        }

        return $response;
    }
}
