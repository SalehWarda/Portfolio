<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\EducationRequest;
use App\Http\Requests\FactRequest;
use App\Http\Requests\HomeRequest;
use App\Http\Requests\PortfolioRequest;
use App\Http\Requests\ResumeRequest;
use App\Http\Requests\SkillRequest;
use App\Http\Requests\SocialRequest;
use App\Http\Requests\SummaryRequest;
use App\Models\admin\About;
use App\Models\admin\Education;
use App\Models\admin\Experience;
use App\Models\admin\Fact;
use App\Models\admin\Home;
use App\Models\admin\Portfolio;
use App\Models\admin\PortfolioCategory;
use App\Models\Admin\Skill;
use App\Models\admin\SocialMedia;
use App\Models\admin\Sumary;
use App\Models\front\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DashboardController extends Controller
{

    ####################################### view all blade #############################################

    public function dashboard()
    {

        $data=[];
        $data['facts'] =  Fact::Selection()->first();
        $data['portfolios'] =  Portfolio::Selection()->first();

        return view('admin.dashboard',$data);
    }


    public function home()
    {

        $home = Home::Selection()->first();
        return view('admin.home', compact('home'));
    }

    public function About()
    {

        $about = About::Selection()->first();
        return view('admin.about', compact('about'));
    }

    public function facts()
    {

        $fact = Fact::Selection()->first();
        return view('admin.facts', compact('fact'));
    }

    public function skills()
    {

        $skill = Skill::Selection()->orderBy('id', 'desc')->get();
        return view('admin.skill.skills', compact('skill'));
    }

    public function summary()
    {

        $sumary = Sumary::Selection()->first();
        return view('admin.resume.sumary.sumary', compact('sumary'));
    }

    public function education()
    {

        $educations = Education::Selection()->OrderBy('id', 'desc')->get();
        return view('admin.resume.education.education', compact('educations'));
    }

    public function experience()
    {

        $experiences = Experience::Selection()->OrderBy('id', 'desc')->get();
        return view('admin.resume.experience.experience', compact('experiences'));
    }

    public function portfolioCategories()
    {

        $categories = PortfolioCategory::Selection()->OrderBy('id', 'desc')->get();
        return view('admin.portfolio.portfolioCategories', compact('categories'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::Selection()->OrderBy('id', 'desc')->paginate(PAGINATION_COUNT);
        return view('admin.portfolio.portfolio', compact('portfolios'));
    }

    public function contact()
    {
        $contacts = ContactUs::Selection()->OrderBy('id', 'desc')->paginate(PAGINATION_COUNT);
        return view('admin.contact', compact('contacts'));
    }

    public function social()
    {
        $socials = SocialMedia::Selection()->orderBy('id', 'desc')->get();
        return view('admin.social.socialMedia', compact('socials'));
    }

    public function readMail($id)
    {

        try {

            $mail = ContactUs::Selection()->find($id);

            if ($mail)

                return view('admin.readMail',compact('mail'));

        }catch(\Exception $ex){



        }

    }

    ####################################### view all blade #############################################





    ####################################### Create Function #############################################

    public function skillsCreate()
    {
        //
        return view('admin.skill.createSkills');
    }

    public function createEducation()
    {
        //
        return view('admin.resume.education.createEducation');
    }

    public function createExperience()
    {
        //
        return view('admin.resume.experience.createExperience');
    }

    public function createPortfolioCategories()
    {
        //
        return view('admin.portfolio.createPortfolioCategories');
    }

    public function createPortfolio()
    {
        //
        $categories = PortfolioCategory::Selection()->get();
        return view('admin.portfolio.createPortfolio', compact('categories'));
    }

    public function createSocial()
    {
        //

        return view('admin.social.createSocialMedia');
    }


    ####################################### End Create Function #############################################




    ####################################### Begin Store Function #############################################


    public function storeSkills(SkillRequest $request)
    {

        Skill::create([

            'n_o_s' => $request->n_o_s,
            'l_o_e' => $request->l_o_e,

        ]);

        return redirect()->route('admin.skills')->with([
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ]);

    }



    public function storeEducation(EducationRequest $request)
    {


        Education::create([

            'name_of_specialty' => $request->name_of_specialty,
            'degree_of_specialty' => $request->degree_of_specialty,
            'study_period' => $request->study_period,
            'place_of_study' => $request->place_of_study,
            'about_of_specialty' => $request->about_of_specialty,

        ]);

        return redirect()->route('admin.education')->with([
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function storeExperience(ResumeRequest $request)
    {
        //

        Experience::create([

            'name_of_experience' => $request->name_of_experience,
            'experience_period' => $request->experience_period,
            'experience_place' => $request->experience_place,
            'task1' => $request->task1,
            'task2' => $request->task2,
            'task3' => $request->task3,
            'task4' => $request->task4,


        ]);

        return redirect()->route('admin.experience')->with([
            'message' => 'Created Successfully ',
            'alert-type' => 'success',
        ]);

    }

    public function storePortfolioCategories(CategoryRequest $request)
    {
        //

        PortfolioCategory::create([

            'name' => $request->name,
        ]);

        return redirect()->route('admin.portfolioCategories')->with([
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ]);

    }

    public function storePortfolio(PortfolioRequest $request)
    {
        //


        try {

        DB::beginTransaction();


        $portfolios = Portfolio::create([

            'name' => $request->name,
            'category_id' => $request->category_id,
            'description' => $request->description,


        ]);


        //save photo in DB
        if ($request->has('photo') && count($request->photo) > 0) {

            foreach ($request->photo as $image) {


                $portfolios->images()->create([

                    'photo' => $image,

                ]);
            }
        }

        DB::commit();

        return redirect()->route('admin.portfolio')->with([
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ]);


        }catch (\Exception $ex){


            DB::rollBack();

                 return redirect()->back()->with([
                     'message' => 'Something is rong, Try again.',
                     'alert-type' => 'danger',
                 ]);
        }


    }


    public function storeSocial(SocialRequest $request)
    {
        //


        SocialMedia::create([

            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,


        ]);

        return redirect()->route('admin.socialmedia')->with([
            'message' => 'Created Successfully',
            'alert-type' => 'success',
        ]);
    }

    ####################################### End Store Function #############################################





    ####################################### Begin Edit Function #############################################


    public function editSkills($id)
    {

        try {

            $skill = Skill::Selection()->find($id);
            if (!$skill)

                return redirect()->route('admin.skills')->with([
                    'message' => 'The Skill does not exist!',
                    'alert-type' => 'danger',
                ]);

            return view('admin.skill.editSkills', compact('skill'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.skills')->with([
                'message' => 'Something is rong, Try again.',
                'alert-type' => 'danger',
            ]);

        }


    }

    public function editEducation($id)
    {

        try {

            $educations = Education::Selection()->find($id);
            if (!$educations)

                return redirect()->route('admin.education')->with([
                    'message' => 'Something is rong, Try again.',
                    'alert-type' => 'danger',
                ]);

            return view('admin.resume.education.editEducation', compact('educations'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.education')->with([
                'message' => 'Something is rong, Try again.',
                'alert-type' => 'danger',
            ]);

        }


    }

    public function editExperience($id)
    {

        try {

            $experiences = Experience::Selection()->find($id);
            if (!$experiences)

                return redirect()->route('admin.experience')->with([
                    'message' => 'Something is rong, Try again.',
                    'alert-type' => 'danger',
                ]);

            return view('admin.resume.experience.editExperience', compact('experiences'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.experience')->with([
                'message' => 'Something is rong, Try again.',
                'alert-type' => 'danger',
            ]);

        }


    }


    public function editPortfolio($id)
    {

        try {

            $portfolios = Portfolio::Selection()->find($id);
            if (!$portfolios)

                return redirect()->route('admin.portfolio')->with([
                    'message' => 'The portfolio does not exist!',
                    'alert-type' => 'danger',
                ]);

            $categories = PortfolioCategory::Selection()->get();


            return view('admin.portfolio.editPortfolio', compact('portfolios', 'categories'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.portfolio')->with([
                'message' => 'Something is rong, Try again.',
                'alert-type' => 'danger',
            ]);

        }


    }

    public function editSocial($id)
    {

        try {

            $socials = SocialMedia::Selection()->find($id);
            if (!$socials)

                return redirect()->back()->with([
                    'message' => 'Does not exist!',
                    'alert-type' => 'danger',
                ]);;

            return view('admin.social.editSocialMedia', compact('socials'));

        } catch (\Exception $ex) {

            return redirect()->route('admin.socialmedia')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        }


    }

    ####################################### End Edit Function #############################################






    ####################################### Begin Update Function #############################################

    public function updateHome(HomeRequest $request, $id)
    {
        // validate done
        // update in DB

        try {

            $home = Home::Selection()->find($id);
            if (!$home)

                return redirect()->route('admin.home')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);


            $filePath = "";
            if ($request->has('photo')) {
                $filePath = $this->uploadImage('home', $request->photo);
            }

            Home::where('id', $id)
                ->update([

                    'name' => $request->name,
                    'jobs' => $request->jobs,
                    'photo' => $filePath,
                ]);

            return redirect()->route('admin.home')->with([
                'message' => 'Updated Successfully',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.home')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        }

    }

    public function updateAbout(AboutRequest $request, $id)
    {
        // validate done
        // update in DB

        try {

            $about = About::Selection()->find($id);
            if (!$about)

                return redirect()->route('admin.about')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);


            $filePath = "";
            if ($request->has('photo')) {
                $filePath = $this->uploadImage('about', $request->photo);
            }

            About::where('id', $id)
                ->update([

                    'personalInfo' => $request->personalInfo,
                    'field_or_specialty' => $request->field_or_specialty,
                    'about_the_specialty' => $request->about_the_specialty,
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'age' => $request->age,
                    'nationality' => $request->nationality,
                    'address' => $request->address,
                    'degree' => $request->degree,
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'spoken' => $request->spoken,
                    'freelance' => $request->freelance,
                    'photo' => $filePath

                ]);

            return redirect()->route('admin.about')->with([
                'message' => 'Updated Successfully',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.about')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        }

    }


    public function updateFacts(FactRequest $request, $id)
    {
        // validate done
        // update in DB

        try {

            $fact = Fact::Selection()->find($id);
            if (!$fact)

                return redirect()->route('admin.facts')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);


            Fact::where('id', $id)
                ->update([

                    'facts' => $request->facts,
                    'clients' => $request->clients,
                    'projects' => $request->projects,
                    'h_o_s' => $request->h_o_s,
                    'y_o_e' => $request->y_o_e,

                ]);

            return redirect()->route('admin.facts')->with([
                'message' => 'Updated Successfully ',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.facts')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);;

        }

    }

    public function updateSkills(SkillRequest $request, $id)
    {


        try {

            $skill = Skill::Selection()->find($id);
            if (!$skill)

                return redirect()->route('admin.skills')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);

            Skill::where('id', $id)
                ->update([

                    'n_o_s' => $request->n_o_s,
                    'l_o_e' => $request->l_o_e,


                ]);
            return redirect()->route('admin.skills')->with([
                'message' =>'Updated Successfully ',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.skills')->with([
                'message' =>'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);
        }

    }


    public function updateSummary(SummaryRequest $request, $id)
    {


        try {

            $sumary = Sumary::Selection()->find($id);
            if (!$sumary)

                return redirect()->route('admin.summary')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);

            Sumary::where('id', $id)
                ->update([

                    'name' => $request->name,
                    't_a_y_s' => $request->t_a_y_s,
                    'address' => $request->address,
                    'phone' => $request->phone,
                    'email' => $request->email,


                ]);
            return redirect()->route('admin.summary')->with([
                'message' => 'Updated Successfully ',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.summary')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);
        }

    }

    public function updateEducation(EducationRequest $request, $id)
    {


        try {

            $educations = Education::Selection()->find($id);
            if (!$educations)

                return redirect()->route('admin.education')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);

            Education::where('id', $id)
                ->update([

                    'name_of_specialty' => $request->name_of_specialty,
                    'degree_of_specialty' => $request->degree_of_specialty,
                    'study_period' => $request->study_period,
                    'place_of_study' => $request->place_of_study,
                    'about_of_specialty' => $request->about_of_specialty,


                ]);
            return redirect()->route('admin.education')->with([
                'message' => 'Updated Successfully ',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.education')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);
        }

    }

    public function updateExperience(ResumeRequest $request, $id)
    {


        try {

            $experiences = Experience::Selection()->find($id);
            if (!$experiences)

                return redirect()->route('admin.experience')->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);

            Experience::where('id', $id)
                ->update([

                    'name_of_experience' => $request->name_of_experience,
                    'experience_period' => $request->experience_period,
                    'experience_place' => $request->experience_place,
                    'task1' => $request->task1,
                    'task2' => $request->task2,
                    'task3' => $request->task3,
                    'task4' => $request->task4,


                ]);
            return redirect()->route('admin.experience')->with([
                'message' => 'Updated Successfully ',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.experience')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);
        }

    }

//    public function updatePortfolio(PortfolioRequest $request, $id)
//    {
//
//
//        try {
//
//            $portfolios = Portfolio::Selection()->find($id);
//            if (!$portfolios)
//
//                return redirect()->route('admin.portfolio')->with([
//                    'message' => 'There is something wrong, please try again later !',
//                    'alert-type' => 'danger',
//                ]);
//
//            $filePath = "";
//            if ($request->has('photo')) {
//                $filePath = $this->uploadImage('portfolio', $request->photo);
//            }
//
//            Portfolio::where('id', $id)
//                ->update([
//
//                    'name' => $request->name,
//                    'category_id' => $request->category_id,
//                    'photo' => $filePath,
//
//
//                ]);
//            return redirect()->route('admin.portfolio')->with([
//                'message' =>'Updated Successfully ',
//                'alert-type' => 'success',
//            ]);
//
//
//        } catch (\Exception $ex) {
//
//            return redirect()->route('admin.portfolio')->with([
//                'message' =>'There is something wrong, please try again later !',
//                'alert-type' => 'danger',
//            ]);
//        }
//
//    }

    public function updateSocial(SocialRequest $request, $id)
    {


        try {

            $socials = SocialMedia::Selection()->find($id);
            if (!$socials)

                return redirect()->back() ->with([
                    'message' => 'There is something wrong, please try again later !',
                    'alert-type' => 'danger',
                ]);


            SocialMedia::where('id', $id)
                ->update([

                    'name' => $request->name,
                    'link' => $request->link,
                    'icon' => $request->icon,


                ]);
            return redirect()->route('admin.socialmedia')->with([
                'message' => 'Updated Successfully',
                'alert-type' => 'success',
            ]);


        } catch (\Exception $ex) {

            return redirect()->route('admin.socialmedia')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);
        }

    }

    ####################################### End Update Function #############################################






    ####################################### Begin Delete Function #############################################

    public function destroySkills($id)
    {
        //

        $skill = Skill::Selection()->find($id);
        if (!$skill)

            return redirect()->route('admin.skills')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        $skill->delete();

        return redirect()->route('admin.skills')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyEducation($id)
    {
        //

        $educations = Education::Selection()->find($id);
        if (!$educations)

            return redirect()->route('admin.education')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        $educations->delete();

        return redirect()->route('admin.education')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyExperience($id)
    {
        //

        $experiences = Experience::Selection()->find($id);
        if (!$experiences)

            return redirect()->route('admin.experience')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        $experiences->delete();

        return redirect()->route('admin.experience')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyPortfolioCategories($id)
    {
        //

        $categories = PortfolioCategory::Selection()->find($id);
        if (!$categories)

            return redirect()->route('admin.portfolioCategories')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);

        $categories->delete();

        return redirect()->route('admin.portfolioCategories')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyPortfolio($id)
    {
        //

        $portfolios = Portfolio::Selection()->find($id);
        if (!$portfolios)

            return redirect()->route('admin.portfolio')->with([
                'message' => 'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);


        $image = Str::after($portfolios->photo, 'public/');
        $image = base_path('public/' . $image);

        $portfolios->delete();

        return redirect()->route('admin.portfolio')->with([
            'message' =>  'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyContact($id)
    {
        //

        $contacts = ContactUs::Selection()->find($id);
        if (!$contacts)

            return redirect()->route('admin.contact')->with([
                'message' =>  'There is something wrong, please try again later !',
                'alert-type' => 'danger',
            ]);


        $contacts->delete();

        return redirect()->route('admin.contact')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroySocial($id)
    {
        //

        $socials = SocialMedia::Selection()->find($id);
        if (!$socials)

            return redirect()->back();


        $socials->delete();

        return redirect()->route('admin.socialmedia')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    public function destroyMail($id)
    {
        //

        $mail = ContactUs::Selection()->find($id);
        if (!$mail)

            return redirect()->back();


        $mail->delete();

        return redirect()->route('admin.contact')->with([
            'message' => 'Deleted Successfully',
            'alert-type' => 'success',
        ]);
    }

    ####################################### End Delete Function #############################################


    public function printMail($id)
    {
        //

        $mail = ContactUs::Selection()->find($id);
        if (!$mail)

            return redirect()->back();


        return view('admin.mailPrint',compact('mail'));
    }


    // save images to folder
    public function savePortfolioImages(Request $request)
    {

        $file = $request->file('dzfile');
        $filename = $this->uploadImage('portfolio', $file);

        return response()->json([

            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),
        ]);

    }

    protected function uploadImage($folder, $image)
    {
        $image->store('/', $folder);
        $filename = $image->hashName();
        return $filename;

    }
}
