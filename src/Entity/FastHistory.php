<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FastHistoryRepository")
 */
class FastHistory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $userId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exerciseName;

    /**
     * @ORM\Column(type="integer")
     */
    private $DictionaryId;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $userTest;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numberOfRepetitions;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateLastTrain;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateNextTrain;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastExerciseGrade;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getExerciseName(): ?string
    {
        return $this->exerciseName;
    }

    public function setExerciseName(string $exerciseName): self
    {
        $this->exerciseName = $exerciseName;

        return $this;
    }

    public function getDictionaryId(): ?int
    {
        return $this->DictionaryId;
    }

    public function setDictionaryId(int $DictionaryId): self
    {
        $this->DictionaryId = $DictionaryId;

        return $this;
    }

    public function getUserTest(): ?int
    {
        return $this->userTest;
    }

    public function setUserTest(?int $userTest): self
    {
        $this->userTest = $userTest;

        return $this;
    }

    public function getNumberOfRepetitions(): ?int
    {
        return $this->numberOfRepetitions;
    }

    public function setNumberOfRepetitions(?int $numberOfRepetitions): self
    {
        $this->numberOfRepetitions = $numberOfRepetitions;

        return $this;
    }

    public function getDateLastTrain(): ?\DateTimeInterface
    {
        return $this->dateLastTrain;
    }

    public function setDateLastTrain(?\DateTimeInterface $dateLastTrain): self
    {
        $this->dateLastTrain = $dateLastTrain;

        return $this;
    }

    public function getDateNextTrain(): ?\DateTimeInterface
    {
        return $this->dateNextTrain;
    }

    public function setDateNextTrain(?\DateTimeInterface $dateNextTrain): self
    {
        $this->dateNextTrain = $dateNextTrain;

        return $this;
    }

    public function getLastExerciseGrade(): ?string
    {
        return $this->lastExerciseGrade;
    }

    public function setLastExerciseGrade(?string $lastExerciseGrade): self
    {
        $this->lastExerciseGrade = $lastExerciseGrade;

        return $this;
    }
}
