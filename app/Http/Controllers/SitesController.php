<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Site;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function addForm($contact_id)
    {
        $contact = Contact::findOrFail($contact_id);
        return view('add_site', ['contact' => $contact]);
    }

    public function add($contact_id, Request $request)
    {
        $contact = Contact::findOrFail($contact_id);

        // проверяем, что все обязательные поля на месте
        // https://laravel.com/docs/5.6/validation
        $request->validate([
            'site' => 'required',
        ]);

        $site = new Site();
        $site->site = $request->site;
        $site->contact_id = $contact_id;
        $site->save();

        return redirect('/contact/' . $contact_id);
    }

    public function delete($id)
    {
        $site = Site::findOrFail($id);
        $site->delete();

        return redirect('/contact/' . $site->contact->id);
    }

    public function delete_cont($contact_id)
    {
      Site::where('contact_id', $contact_id)->delete();
      return redirect('/contact/' . $site->contact->id);
    }
}
