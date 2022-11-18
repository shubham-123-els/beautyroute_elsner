<?php

namespace Kangaroorewards\Core\Model;


use Kangaroorewards\Core\Api\Data\SurveyAnswerInterface;

class SurveyAnswer implements SurveyAnswerInterface
{
    private $_parent;

    private $_child;

    private $_questionId;

    private $_notInterested;

    private $_answerFreeText;

    /**
     * @param $parent
     */
    public function setParent($parent)
    {
        $this->_parent = $parent;
    }

    /**
     * @param int $child
     */
    public function setChild($child)
    {
        $this->_child = $child;
    }

    /**
     * @param int $questionId
     */
    public function setQuestionId($questionId)
    {
        $this->_questionId = $questionId;
    }

    /**
     * @param bool $notInterested
     */
    public function setNotInterested($notInterested = null)
    {
        $this->_notInterested = $notInterested;
    }

    /**
     * @param string $answerFreeText
     */
    public function setAnswerFreeText($answerFreeText = null)
    {
        $this->_answerFreeText = $answerFreeText;
    }


    /**
     * @return int
     */
    public function getParent()
    {
        return $this->_parent;
    }

    /**
     * @return int
     */
    public function getChild()
    {
        return $this->_child;
    }

    /**
     * @return int
     */
    public function getQuestionId()
    {
        return $this->_questionId;
    }

    /**
     * @return boolean
     */
    public function getNotInterested()
    {
        return $this->_notInterested;
    }

    /**
     * @return string
     */
    public function getAnswerFreeText()
    {
        return $this->_answerFreeText;
    }

    public function getAttributes()
    {
        $data = [
            "parent" => $this->getParent(),
            "child" => $this->getChild(),
            "question_id" => $this->getQuestionId(),
        ];

        $notInterested = $this->getNotInterested();
        $comment = $this->getAnswerFreeText();
        if (isset($notInterested)) {
            $data ["not_interested"] = $notInterested;
        }
        if (isset($comment)) {
            $data ["answer_free_text"] = $comment;
        }
        return $data;
    }
}