<?php

namespace app\models;

use app\Database;

class JobModel extends _BaseModel
{

  private $db;

  private int $id;
  private int $client_id;
  private string $title;
  private string $description;
  private string $image;
  private float $pay_rate_per_hour;
  private float $expected_duration_in_hours;
  private string $receive_job_proposals_deadline;
  private string $time_created;
  private int $is_active;

  public function __construct($id = null)
  {
    $this->db = $this->connectToDb();

    if ($id != null) {

      $sql = 'SELECT * FROM job WHERE id = :id';
      $statement = $this->db->prepare($sql);
      $statement->bindParam(':id', $id);
      $statement->execute();
      $client = $statement->fetch();

      $this->id = $id;
      $this->client_id = $client['client_id'];
      $this->title = $client['title'];
      $this->description = $client['description'];
      $this->image = $client['image'];
      $this->pay_rate_per_hour = $client['pay_rate_per_hour'];
      $this->expected_duration_in_hours = $client['expected_duration_in_hours'];
      $this->receive_job_proposals_deadline = $client['receive_job_proposals_deadline'];
      $this->time_created = $client['time_created'];
      $this->is_active = $client['is_active'];
    }
  }

  public static function create(
    int $client_id,
    string $title,
    string $description,
    string $image,
    float $pay_rate_per_hour,
    float $expected_duration_in_hours,
    string $receive_job_proposals_deadline,
  ): JobModel {

    $db = (new Database)->connectToDb();

    $sql = 'INSERT INTO job (client_id, title, description, image, pay_rate_per_hour, expected_duration_in_hours, receive_job_proposals_deadline) VALUES (:client_id, :title, :description, :image, :pay_rate_per_hour, :expected_duration_in_hours, :receive_job_proposals_deadline)';
    $statement = $db->prepare($sql);
    $statement->bindParam(':client_id', $client_id);
    $statement->bindParam(':title', $title);
    $statement->bindParam(':description', $description);
    $statement->bindParam(':image', $image);
    $statement->bindParam(':pay_rate_per_hour', $pay_rate_per_hour);
    $statement->bindParam(':expected_duration_in_hours', $expected_duration_in_hours);
    $statement->bindParam(':receive_job_proposals_deadline', $receive_job_proposals_deadline);
    $statement->execute();

    return new JobModel($db->lastInsertId());
  }

  public function getId(): int
  {
    return $this->id;
  }

  public function getClientId(): int
  {
    return $this->client_id;
  }

  public function getClient(): ClientModel
  {
    return new ClientModel($this->client_id);
  }

  public function getTitle(): string
  {
    return $this->title;
  }

  public function getDescription(): string
  {
    return $this->description;
  }

  public function getImage(): string
  {
    return $this->image;
  }

  public function getPayRatePerHour(): float
  {
    return $this->pay_rate_per_hour;
  }

  public function getExpectedDurationInHours(): float
  {
    return $this->expected_duration_in_hours;
  }

  public function getReceiveJobProposalsDeadline(): string
  {
    return $this->receive_job_proposals_deadline;
  }

  public function getTimeCreated(): string
  {
    return $this->time_created;
  }

  public function getIsActive(): int
  {
    return $this->is_active;
  }
}