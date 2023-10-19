<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\career_inquiry;
use File;
use Mail;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {        
        $data = DB::table('career_inquiries')->select('*')->get();
        return view('Frontend.career',compact('data'));
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
    public function store(Request $request)
    {
        $input = request()->except(['_token', '_method']);

        if ($request->hasFile('pdf')) {
            $attachment = $request->file('pdf');

            // Specify the custom directory path where you want to store the attachment
            $customDirectory = '/career/inquiry';
            $attachmentPath = $attachment->move(public_path($customDirectory), $attachment->getClientOriginalName());
        } else {
            $attachmentPath = null;
        }

        career_inquiry::create($input);

        // Define the recipient email address
        $recipientEmail = 'amee.rndtechnosoft@gmail.com';

        // Define the sender's email dynamically (replace with your logic)
        $senderEmail = $input['email'];

        // Define the sender's name dynamically (replace with your logic)
        $senderName = $input['name'];

        // Create an array of data to pass to the email view
        $emailData = [
            'input' => $input,
            'attachmentPath' => $attachmentPath,
        ];

        // Send the email with the data array
        Mail::send('Mail.Career', $emailData, function ($mail) use ($recipientEmail, $attachmentPath, $senderEmail, $senderName) {
            $mail->to($recipientEmail);

            // Set the subject for the email
            $mail->subject('Career Inquiry');

            // Set the sender's name and email address
            $mail->from($senderEmail, $senderName);

            if ($attachmentPath) {
                $mail->attach($attachmentPath); // Use the attachment path directly
            }
        });

        // Optionally, you can redirect the user after sending the email
        return back()->with('success', 'Email sent successfully');
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
}
