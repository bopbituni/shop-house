<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckFormQuestion;
use App\Http\Services\Implement\QuestionServiceImpl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuestionController extends Controller
{
    protected $questionSer;

    public function __construct(QuestionServiceImpl $questionSer)
    {
        $this->questionSer = $questionSer;
    }

    public function index()
    {
        $questions = $this->questionSer->getAll();
        return view('admin.question.list' , compact('questions'));
    }

    public function delete($id)
    {
        $this->questionSer->findById($id);

        Session::flash('delete' , 'Xóa tin nhắn thành công');
        return redirect()->route('admin.question.list');
    }

    public function store(CheckFormQuestion $request)
    {
        $this->questionSer->create($request);

        Session::flash('success' , "Cảm ơn bạn đã gửi câu hỏi về cho chúng tôi.");
        return redirect()->route('admin.question.list');
    }
}
