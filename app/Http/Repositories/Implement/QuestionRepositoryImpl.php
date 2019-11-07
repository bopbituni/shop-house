<?php


namespace App\Http\Repositories\Implement;


use App\Http\Repositories\QuestionInterface;
use App\Question;

class QuestionRepositoryImpl implements QuestionInterface
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->question = $question;
    }

    public function getAll()
    {
        return $this->question->all();
    }

    public function findById($id)
    {
        return $this->question->findOrFail($id);
    }

    public function store($object)
    {
        return $object->save();
    }

    public function update($object, $data)
    {
        return $object->update($data);
    }

    public function delete($object)
    {
        return $object->delete();
    }

}