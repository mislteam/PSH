<?php

namespace App\Http\Controllers\Backend;

use App\Models\Company;
use App\Models\Milestone;
use Illuminate\Http\Request;
use App\Models\CompanyDetail;
use App\Models\CompanyPoilcy;
use App\Models\CompanyFounder;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    //about company policy index
    public function index()
    {
        $companypolicy = CompanyPoilcy::paginate(10);
        return view('backend.allpage.about.companypolicy.index', compact('companypolicy'));
    }

    //about company policy edit 
    public function edit($id)
    {
        $companypolicy = CompanyPoilcy::find($id);
        return view('backend.allpage.about.companypolicy.edit', compact('companypolicy'));
    }

    //about company policy update method
    public function update(Request $request, $id)
    {
        $companypolicy = [
            'title' => $request->title,
            'description' => $request->description
        ];

        CompanyPoilcy::where('id', $id)->update($companypolicy);
        return redirect()->route('about.companypolicy')->with('message', 'Company Policy Updated Successfully');
    }

    //about companyindex page
    public function companyindex()
    {
        $company = Company::paginate(10);
        return view('backend.allpage.about.company.index', compact('company'));
    }

    //about company create page
    public function companycreate()
    {
        return view('backend.allpage.about.company.create');
    }

    //about store method
    public function companystore(Request $request)
    {
        $imagefileName = uniqid() . $request->file('company_img')->getClientOriginalName();
        $request->file('company_img')->storeAs('public/company_img/', $imagefileName);
        $company['company_img'] = $imagefileName;

        $company = [
            'title' => $request->title,
            'description' => $request->description,
            'company_img' => $imagefileName
        ];

        Company::create($company);

        return redirect()->route('about.company')->with('message', 'Company Page Updated successfully');
    }


    //about company edit 
    public function companyedit($id)
    {
        $company = Company::find($id);
        return view('backend.allpage.about.company.edit', compact('company'));
    }

    //about update method
    public function companyupdate(Request $request, $id)
    {
        $company = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        if ($request->hasFile('company_img')) {
            $imagefileName = uniqid() . $request->file('company_img')->getClientOriginalName();
            $request->file('company_img')->storeAs('public/company_img/', $imagefileName);
            $company['company_img'] = $imagefileName;
        }

        Company::where('id', $id)->update($company);

        return redirect()->route('about.company')->with('message', 'Company Page Updated successfully');
    }

    // about company detail page
    public function companydetailindex()
    {
        $companydetail = CompanyDetail::paginate(10);
        return view('backend.allpage.about.companydetail.index', compact('companydetail'));
    }

    // about company detail page
    public function companydetailedit($id)
    {
        $companydetail = CompanyDetail::find($id);
        return view('backend.allpage.about.companydetail.edit', compact('companydetail'));
    }

    //about company policy update method
    public function companydetailupdate(Request $request, $id)
    {
        $companydetail = [
            'title' => $request->title,
            'description' => $request->description,
            'value' => $request->value
        ];

        CompanyDetail::where('id', $id)->update($companydetail);
        return redirect()->route('about.companydetail')->with('message', 'Company Detail Updated Successfully');
    }

    // about company detail page
    public function companyfounderindex()
    {
        $companyfounder = CompanyFounder::paginate(10);
        return view('backend.allpage.about.companyfounder.index', compact('companyfounder'));
    }

    // about company detail page
    public function companyfounderedit($id)
    {
        $companyfounder = CompanyFounder::find($id);
        return view('backend.allpage.about.companyfounder.edit', compact('companyfounder'));
    }

    //about update method
    public function companyfounderupdate(Request $request, $id)
    {
        $companyfounder = [
            'title' => $request->title,
            'name' => $request->name,
            'description' => $request->description,
        ];
        if ($request->hasFile('founder_img')) {
            $imagefileName = uniqid() . $request->file('founder_img')->getClientOriginalName();
            $request->file('founder_img')->storeAs('public/founder_img/', $imagefileName);
            $companyfounder['founder_img'] = $imagefileName;
        }

        CompanyFounder::where('id', $id)->update($companyfounder);

        return redirect()->route('about.companyfounder')->with('message', 'Company Founder Page Updated successfully');
    }

    // about company milestone page
    public function milestoneindex()
    {
        $milestone = Milestone::paginate(10);
        return view('backend.allpage.about.milestone.index', compact('milestone'));
    }

    // about company milestone page
    public function milestonecreate()
    {
        return view('backend.allpage.about.milestone.create');
    }

    //about company policy update method
    public function milestonestore(Request $request)
    {
        Milestone::create([
            'title' => $request->title,
            'description' => $request->description,
            'year' => $request->year
        ]);
        return redirect()->route('milestone.index')->with('message', 'Milestone created Successfully');
    }

    // about company milestone page
    public function milestoneedit($id)
    {
        $milestone = Milestone::find($id);
        return view('backend.allpage.about.milestone.edit', compact('milestone'));
    }

    //about update method
    public function milestoneupdate(Request $request, $id)
    {
        $milestone = [
            'title' => $request->title,
            'year' => $request->year,
            'description' => $request->description,
        ];
        Milestone::where('id', $id)->update($milestone);

        return redirect()->route('milestone.index')->with('message', 'Milestone Updated successfully');
    }
}
