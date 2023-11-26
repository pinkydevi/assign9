
<?php
class ContactController extends Controller
{
    public function submit(Request $request)
    {
        

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}

?>