<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

class PageController extends Controller {
  public function home(){ return view('home'); }
  public function about(){ $cv=$this->md(resource_path('content/cv/about.md')); return view('about',['cvAbout'=>$cv]); }
  public function projects(){ $cv=$this->md(resource_path('content/cv/projects.md')); return view('projects',['projects'=>$cv]); }
  public function hobby(){ return view('hobby'); }
  public function contact(){ return view('contact'); }
  private function md($p){ if(!File::exists($p)) return null; $pdown=new \Parsedown(); return $pdown->text(File::get($p)); }
}
