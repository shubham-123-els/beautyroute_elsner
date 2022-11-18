<?php

namespace Kangaroorewards\Core\Api\Data;


interface SurveyAnswerInterface
{
    /**
     * @param int $parent
     */
    public function setParent($parent);

    /**
     * @param int $child
     */
    public function setChild($child);

    /**
     * @param int $questionId
     */
    public function setQuestionId($questionId);

    /**
     * @param boolean $notInterested
     */
    public function setNotInterested($notInterested = null);

    /**
     * @param string $answerFreeText
     */
    public function setAnswerFreeText($answerFreeText = null);

    /**
     * @return integer
     */
    public function getParent();

    /**
     * @return integer
     */
    public function getChild();

    /**
     * @return integer
     */
    public function getQuestionId();

    /**
     * @return boolean
     */
    public function getNotInterested();

    /**
     * @return string
     */
    public function getAnswerFreeText();
}