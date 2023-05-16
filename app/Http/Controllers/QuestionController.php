<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){
        $data = Question::get();
        //return $data;
        return view('exam.question-list',compact('data'));
    }

    public function addQuestion(){
        return view('exam.add-question');
    }

    public function saveQuestion(Request $request){

        $request->validate([
            'question' => 'required',
            'opA' => 'required',
            'opB' => 'required',
            'opC' => 'required',
            'opD' => 'required',
            'answer' => 'required',
        ]);

        $question = $request->question;
        $optionA = $request->opA;
        $optionB = $request->opB;
        $optionC = $request->opC;
        $optionD = $request->opD;
        $answer = $request->answer;

        $que = new Question();
        $que-> question = $question;
        $que-> opA = $optionA;
        $que-> opB = $optionB;
        $que-> opC = $optionC;
        $que-> opD = $optionD;
        $que-> answer = $answer;
        $que->save();

        return redirect()->back()->with('success','Question Added Successfully!'); //meka pennanne ne
    }

    public function editQuestion($id){
        $data = Question::where('id','=', $id)->first();
        return view('exam.edit-question',compact('data'));
    }

    public function updateQuestion(Request $request){
        $request->validate([
            'question' => 'required',
            'opA' => 'required',
            'opB' => 'required',
            'opC' => 'required',
            'opD' => 'required',
            'answer' => 'required',
        ]);

        $id = $request->id;
        $question = $request->question;
        $optionA = $request->opA;
        $optionB = $request->opB;
        $optionC = $request->opC;
        $optionD = $request->opD;
        $answer = $request->answer;

        Question::where('id', '=', $id)->update([
            'question' => $question,
            'opA' => $optionA,
            'opB' => $optionB,
            'opC' => $optionC,
            'opD' => $optionD,
            'answer' => $answer,
        ]);
        return redirect()->back()->with('success','Question Update Successfully!');
    }

    public function deleteQuestion($id){
        Question::where('id','=',$id)->delete();
        return redirect()->back()->with('success','Question Deleted Successfully!');
    }

}
