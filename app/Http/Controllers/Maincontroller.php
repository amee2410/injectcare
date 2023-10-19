<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use App\Models\inquiry;

class Maincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = DB::table('banners')->select('*')->get();
        $feature = DB::table('features')->select('*')->first();
        $about = DB::table('abouts')->select('*')->first();
        $counter = DB::table('counters')->select('*')->get();
        $team = DB::table('teams')->select('*')->get();
        $department = DB::table('departments')->select('*')->get();
        $clients = DB::table('clients')->select('*')->get();
        $certificate = DB::table('certificates')->select('*')->get();
        $data1 = DB::table('products')->select('*')->get();
        $blog = DB::table('blogs')->select('*')->limit(3)->get();
        return view('Frontend.index', compact('banner', 'feature', 'about', 'counter', 'team', 'department', 'clients', 'certificate', 'data1', 'blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function contact()
    {
        return view('Frontend.contact-us');
    }
    public function about()
    {
        $about = DB::table('abouts')->select('*')->first();
        $team = DB::table('teams')->select('*')->get();
        $mision = DB::table('missionvisions')->select('*')->first();
        return view('Frontend.about-us', compact('about', 'team', 'mision'));
    }
    public function career()
    {
        return view('Frontend.career');
    }
    public function inquiry(Request $request)
    {
        $input = $request->except(['_token', '_method']);
        $mail = new PHPMailer(true);
        try {
            $to = 'amee.rndtechnosoft@gmail.com';
            $subject = 'Contact Us Inquiry';
            $mail_message = '<html><head><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"><style>body {font-family: Helvetica,Arial,sans-serif; }.row{ background:#fff;}.row #col1 {padding:5px;} table tr td{background:#fff;max-width:806px;min-hieght:20px;;overflow:auto;font-size:12px;font-family: Helvetica,Arial,sans-serif; font-size: 14px; color: #333; line-height: 24px;padding-right:10px;}</style></head><body style="background:#fff">
    	<div style="background: #f3f3f3;width:806px;hieght:140px;border: 2px solid #f3f3f3;	border-top-left-radius: 5px;border-top-right-radius: 5px;padding:10px;"><div align="center"><span style="color:#333;text-align: left; font-family: Helvetica,Arial,sans-serif;font-size:25px;font-weight:bold;">You Have Received An Enquiry</span></div></div><div style="background:#fff;width:806px;hieght:140px;padding:10px;border: 2px solid #f3f3f3;"><P style="text-align: left; font-family: Helvetica,Arial,sans-serif; font-size: 14px; font-weight: bold; color: #333; line-height: 24px;"></P><div class="row"><div id="col1"><table><tr><td style="color:#333; font-weight: bold;">Name</td><td>';
            $mail_message .=  $input['name'];
            $mail_message .= '</td></tr><tr><td style="color:#333; font-weight: bold;">Email Id</td><td>';
            $mail_message .= $input['email'];
            $mail_message .= '</td></tr><tr><td style="color:#333; font-weight: bold;">phone</td><td>';
            $mail_message .= $input['phone'];
            $mail_message .= '</td></tr><tr><td style="color:#333; font-weight: bold;">Subject</td><td>';
            $mail_message .= $input['subject'];
            $mail_message .= '</td></tr>	<tr><td style="color:#333; font-weight: bold;">Message</td><td>';
            $mail_message .= $input['message'];
            $mail_message .= '</td></tr></table></div></div>							
    	</div>		
    	</body></html>';

            $headers = "From: {$input['name']} <{$input['email']}>\r\n" .
                "Reply-To: {$input['email']}\r\n" .
                "X-Mailer: PHP/" . phpversion();
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            // Send email
            $success = mail($to, $subject, $mail_message, $headers);

            if ($success) {
                // Save data to the database
                $careerInquiry = new inquiry;
                $careerInquiry->name = $input['name'];
                $careerInquiry->email = $input['email'];
                $careerInquiry->phone = $input['phone'];
                $careerInquiry->subject = $input['subject'];
                $careerInquiry->message = $input['message'];

                $careerInquiry->save();

                return back()->with('success', 'Email sent successfully and data saved to database');
            } else {
                return back()->with('error', 'Message could not be sent.');
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent. Error: ' . $e->getMessage());
        }
    }
}
