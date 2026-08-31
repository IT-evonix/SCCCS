<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\ContactController;

Route::get('clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    $data_arr = array();
    $data_arr['title'] = "SCCCS";
    $data_arr['keywords'] = "SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('index', ['data_arr' => $data_arr]);
});
Route::get('/coming-soon', function () {
    $data_arr = array();
    $data_arr['title'] = "coming-soon";
    $data_arr['keywords'] = "coming-soon";
    $data_arr['description'] = "coming-soon";
    $data_arr['canonical'] = "";
    return view('coming-soon', ['data_arr' => $data_arr]);
});
// Route::get('/about-symbiosis-society', function () {
//     $data_arr = array();
//     $data_arr['title'] = "About Symbiosis Society";
//     $data_arr['keywords'] = "About Symbiosis Society";
//     $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
//     $data_arr['canonical'] = "";
//     return view('about-us.about-symbiosis-society', ['data_arr' => $data_arr]);
// });

// Route::get('/about-siu', function () {
//     $data_arr = array();
//     $data_arr['title'] = "About SIU";
//     $data_arr['keywords'] = "About SIU";
//     $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
//     $data_arr['canonical'] = "";
//     return view('about-us.about-siu', ['data_arr' => $data_arr]);
// });


Route::get('/about-scccs', function () {
    $data_arr = array();
    $data_arr['title'] = "About SCCCS";
    $data_arr['keywords'] = "About SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('about-us.about-scccs', ['data_arr' => $data_arr]);
});

// Route::get('/head-of-centre', function () {
//     $data_arr = array();
//     $data_arr['title'] = "Head of Center";
//     $data_arr['keywords'] = "SCCCS Head of Center";
//     $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
//     $data_arr['canonical'] = "";
//     return view('about-us.head-of-centre', ['data_arr' => $data_arr]);
// });
Route::get('/deputy-head-center', function () {
    $data_arr = array();
    $data_arr['title'] = "Deputy Head Center";
    $data_arr['keywords'] = "SCCCS Deputy Head Center";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('about-us.deputy-head-center', ['data_arr' => $data_arr]);
});
// Route::get('/phd-program', function () {
//     $data_arr = array();
//     $data_arr['title'] = "PhD Programs";
//     $data_arr['keywords'] = "PhD Programs";
//     $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
//     $data_arr['canonical'] = "";
//     return view('about-us.phd-program', ['data_arr' => $data_arr]);
// });
Route::get('/life-at-scccs', function () {
    $data_arr = array();
    $data_arr['title'] = "life at SCCCS";
    $data_arr['keywords'] = "life at SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('about-us.lifeatscccs', ['data_arr' => $data_arr]);
});
// Research Tab
Route::get('/areas-of-research/one-health', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | One Health";
    $data_arr['keywords'] = "Areas of Research | One Health";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.one-health', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/water-and-climate-change', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Water and Climate Change";
    $data_arr['keywords'] = "Areas of Research | Water and Climate Change";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.water-and-climate-change', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/bioenergy-and-carbon-capture', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Water and Climate Change";
    $data_arr['keywords'] = "Areas of Research | Water and Climate Change";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.bioenergy-and-carbon-capture', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/biodiversity-and-waste-management', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Biodiversity and Waste Managment";
    $data_arr['keywords'] = "Areas of Research | Biodiversity and Waste Managment";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.biodiversity-and-waste-management', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/sustainable-agriculture-and-carbon-mitigation', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | sustainable Agriculture and Carbon Mitigation";
    $data_arr['keywords'] = "Areas of Research | sustainable Agriculture and Carbon Mitigation";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.sustainable-agriculture-and-carbon-mitigation', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/energy-and-urban-sustainability', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Energy and Urban Sustainability";
    $data_arr['keywords'] = "Areas of Research | Energy and Urban Sustainability";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.energy-and-urban-sustainability', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/campus-sustainability', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Campus Sustainability";
    $data_arr['keywords'] = "Areas of Research | Campus Sustainability";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.campus-sustainability', ['data_arr' => $data_arr]);
});
Route::get('/areas-of-research/climate-education-and-capacity-building', function () {
    $data_arr = array();
    $data_arr['title'] = "Areas of Research | Climate Education and Capacity Building";
    $data_arr['keywords'] = "Areas of Research | Climate Education and Capacity Building";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.research-area.climate-education-and-capacity-building', ['data_arr' => $data_arr]);
});
Route::get('/projects-and-grants', function () {
    $data_arr = array();
    $data_arr['title'] = "Projects and Grants";
    $data_arr['keywords'] = "Projects and Grants";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.projects-and-grants', ['data_arr' => $data_arr]);
});
Route::get('/coming-soon-for-publication', function () {
    $data_arr = array();
    $data_arr['title'] = "Publication SCCCS";
    $data_arr['keywords'] = "Publication SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.publication', ['data_arr' => $data_arr]);
});
Route::get('/phd-thesis', function () {
    $data_arr = array();
    $data_arr['title'] = "PhP Thesis";
    $data_arr['keywords'] = "PhP Thesis";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.dissertation-outputs.phd-thesis', ['data_arr' => $data_arr]);
});
Route::get('/masters-dissertation-reports', function () {
    $data_arr = array();
    $data_arr['title'] = "Masters Dissertation Reports";
    $data_arr['keywords'] = "Masters Dissertation Reports";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('research.dissertation-outputs.masters-dissertation-reports', ['data_arr' => $data_arr]);
});
Route::get('/international-national-collaborations-individual', function () {
    $data_arr = array();
    $data_arr['title'] = "International / National Collaborations -Individual";
    $data_arr['keywords'] = "International / National Collaborations -Individual";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.research.collaborators.international-national-collaborations-individual', ['data_arr' => $data_arr]);
});

Route::get('/institutional-partners', function () {
    $data_arr = array();
    $data_arr['title'] = "Institutional Partners";
    $data_arr['keywords'] = "Institutional Partners";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.research.collaborators.institutional-partners', ['data_arr' => $data_arr]);
});



// People Tab Start

Route::get('/visiting-scholars-faculty', function () {
    $data_arr = array();
    $data_arr['title'] = "Visiting Scholars/ Faculty";
    $data_arr['keywords'] = "Visiting Scholars/ Faculty";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.visiting-scholars-faculty', ['data_arr' => $data_arr]);
});
Route::get('/rucha-kale', function () {
    $data_arr = array();
    $data_arr['title'] = "Rucha Kale";
    $data_arr['keywords'] = "Staff";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.rucha-kale', ['data_arr' => $data_arr]);
});
Route::get('/ankita-chopra', function () {
    $data_arr = array();
    $data_arr['title'] = "Ankita Chopra";
    $data_arr['keywords'] = "Project Scientists";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.ankita-chopra', ['data_arr' => $data_arr]);
});
Route::get('/shumailah-ishtiyaq', function () {
    $data_arr = array();
    $data_arr['title'] = "Shumailah Ishtiyaq";
    $data_arr['keywords'] = "Project Scientists";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.shumailah-ishtiyaq', ['data_arr' => $data_arr]);
});
Route::get('/abhijit-kulkarni', function () {
    $data_arr = array();
    $data_arr['title'] = "Abhijit Kulkarni";
    $data_arr['keywords'] = "Research Associate";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.abhijit-kulkarni', ['data_arr' => $data_arr]);
});
Route::get('/adarsh-kumar-singh', function () {
    $data_arr = array();
    $data_arr['title'] = "Adarsh Kumar Singh";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.adarsh-kumar-singh', ['data_arr' => $data_arr]);
});
Route::get('/khushboo-tomar', function () {
    $data_arr = array();
    $data_arr['title'] = "Khushboo Tomar";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.khushboo-tomar', ['data_arr' => $data_arr]);
});
Route::get('/kriti-joshi', function () {
    $data_arr = array();
    $data_arr['title'] = "Kriti Joshi";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.kriti-joshi', ['data_arr' => $data_arr]);
});

Route::get('/rashmi-s-dhanwar', function () {
    $data_arr = array();
    $data_arr['title'] = "Rashmi S. Dhanwar";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.rashmi-s-dhanwar', ['data_arr' => $data_arr]);
});

Route::get('/rupali-s-thakur', function () {
    $data_arr = array();
    $data_arr['title'] = "Rupali S. Thakur";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.rupali-s-thakur', ['data_arr' => $data_arr]);
});

Route::get('/ujjwala-waghmare', function () {
    $data_arr = array();
    $data_arr['title'] = "Ujjwala Waghmare";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.ujjwala-waghmare', ['data_arr' => $data_arr]);
});

Route::get('/brij-raj', function () {
    $data_arr = array();
    $data_arr['title'] = "Brij Raj";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.brij-raj', ['data_arr' => $data_arr]);
});
Route::get('/angela-thomas', function () {
    $data_arr = array();
    $data_arr['title'] = "Angela Thomas";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.angela-thomas', ['data_arr' => $data_arr]);
});
Route::get('/sudha-balakrishnan', function () {
    $data_arr = array();
    $data_arr['title'] = "Sudha Balakrishnan";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.sudha-balakrishnan', ['data_arr' => $data_arr]);
});
Route::get('/kedar-sohoni', function () {
    $data_arr = array();
    $data_arr['title'] = "Kedar Sohoni";
    $data_arr['keywords'] = "Doctoral Students";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.kedar-sohoni', ['data_arr' => $data_arr]);
});
Route::get('/shwetha-kadam', function () {
    $data_arr = array();
    $data_arr['title'] = "Shwetha Kadam";
    $data_arr['keywords'] = "Project Assistants";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.shwetha-kadam', ['data_arr' => $data_arr]);
});
Route::get('/kshiteeja-dushing', function () {
    $data_arr = array();
    $data_arr['title'] = "Kshiteeja Dushing";
    $data_arr['keywords'] = "Project Assistants";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.kshiteeja-dushing', ['data_arr' => $data_arr]);
});
Route::get('/afshan-ahmad', function () {
    $data_arr = array();
    $data_arr['title'] = "Afshan Ahmad";
    $data_arr['keywords'] = "Research Assistants";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.afshan-ahmad', ['data_arr' => $data_arr]);
});
Route::get('/avishkar-munje', function () {
    $data_arr = array();
    $data_arr['title'] = "Avishkar Munje";
    $data_arr['keywords'] = "Research Assistants";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.avishkar-munje', ['data_arr' => $data_arr]);
});
Route::get('/alumni', function () {
    $data_arr = array();
    $data_arr['title'] = "Alumni";
    $data_arr['keywords'] = "Alumni";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.alumni', ['data_arr' => $data_arr]);
});
Route::get('/interns', function () {
    $data_arr = array();
    $data_arr['title'] = "Interns";
    $data_arr['keywords'] = "Interns";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('people.interns', ['data_arr' => $data_arr]);
});
// Route::get('/anushka-awad', function () {
//     $data_arr = array();
//     $data_arr['title'] = "Interns";
//     $data_arr['keywords'] = "Interns";
//     $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
//     $data_arr['canonical'] = "";
//     return view('people.anushka-awad', ['data_arr' => $data_arr]);
// });

// Faculty End

Route::get('/sustainability-initiatives', function () {
    $data_arr = array();
    $data_arr['title'] = "Sustainability Initiatives";
    $data_arr['keywords'] = "Sustainability Initiatives";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('sustainability-initiatives', ['data_arr' => $data_arr]);
});

// Media & Activity Start
Route::get('/awards-and-recognition', function () {
    $data_arr = array();
    $data_arr['title'] = "Awards & Recognition";
    $data_arr['keywords'] = "Awards & Recognition";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.awards-and-recognition', ['data_arr' => $data_arr]);
});
Route::get('/blogs', function () {
    $data_arr = array();
    $data_arr['title'] = "Blogs";
    $data_arr['keywords'] = "Blogs";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.blogs', ['data_arr' => $data_arr]);
});
Route::get('/quiz', function () {
    $data_arr = array();
    $data_arr['title'] = "News";
    $data_arr['keywords'] = "News";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.quiz', ['data_arr' => $data_arr]);
});
Route::get('/news', function () {
    $data_arr = array();
    $data_arr['title'] = "News";
    $data_arr['keywords'] = "News";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.news', ['data_arr' => $data_arr]);
});
Route::get('/events-calendar', function () {
    $data_arr = array();
    $data_arr['title'] = "Events calendar";
    $data_arr['keywords'] = "Events calendar";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.events-calendar', ['data_arr' => $data_arr]);
});
Route::get('/seminars-workshops-conferences', function () {
    $data_arr = array();
    $data_arr['title'] = "Seminars Workshops Conferences";
    $data_arr['keywords'] = "Seminars Workshops Conferences";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.seminars-workshops-conferences', ['data_arr' => $data_arr]);
});
Route::get('/visitors-to-scccs', function () {
    $data_arr = array();
    $data_arr['title'] = "Visitors to SCCCS";
    $data_arr['keywords'] = "Visitors to SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('.media-activity.visitors-to-scccs', ['data_arr' => $data_arr]);
});



Route::get('/career', function () {
    $data_arr = array();
    $data_arr['title'] = "Career-SCCCS";
    $data_arr['keywords'] = "Career-SCCCS";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('career', ['data_arr' => $data_arr]);
});
Route::get('/biodiversity', function () {
    $data_arr = array();
    $data_arr['title'] = "Biodiversity";
    $data_arr['keywords'] = "biodiversity";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('biodiversity', ['data_arr' => $data_arr]);
});
Route::get('/contact-us', function () {
    $data_arr = array();
    $data_arr['title'] = "Contact Us";
    $data_arr['keywords'] = "Contact Us";
    $data_arr['description'] = "Symbiosis Centre for Climate Change and Sustainability (SCCCS).";
    $data_arr['canonical'] = "";
    return view('contact-us', ['data_arr' => $data_arr]);
});