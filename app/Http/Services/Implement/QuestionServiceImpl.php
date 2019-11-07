<?php


namespace App\Http\Services\Implement;


use App\Http\Repositories\Implement\QuestionRepositoryImpl;
use App\Http\Services\QuestionInterface;
use App\Question;

class QuestionServiceImpl implements QuestionInterface
{
    protected $questionRepo;

    public function __construct(QuestionRepositoryImpl $questionRepo)
    {
        $this->questionRepo = $questionRepo;
    }

    public function getAll()
    {
        return $this->questionRepo->getAll();
    }

    public function findById($id)
    {
        return $this->questionRepo->findById($id);
    }

    public function create($request)
    {
        $question = new Question();
        $question->name = $request->name;
        $question->email = $request->email;
        $question->message = $request->message;
        $question->customer_id = $request->customer_id;

        $this->questionRepo->store($question);
    }

    public function update($request, $id)
    {
        $question = $this->questionRepo->findById($id);
        return $this->questionRepo->update($question, $request);
    }

    public function delete($id)
    {
        $question = $this->questionRepo->findById($id);
        $this->questionRepo->delete($question);
    }


}