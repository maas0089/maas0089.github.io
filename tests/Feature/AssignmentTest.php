<?php

namespace Tests\Feature;

use App\Assignment;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AssignmentTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndexViewHasAvailableAssignments()
    {
        $response = $this->get(route('opdrachten.index'));

        $response->assertStatus(200);
        $response->assertViewIs('assignments.index');
        $response->assertViewHas('assignments');
    }
    public function testItWritesGoodFormToDatabaseAndRedirectsToIndex()
    {
        $token = 'wpjg';
        $projectName = 'cursus';
        $imageUrl = 'laravel.jpg';
        $description = 'een cursus';

        $response = $this
            ->withSession(['_token' => $token])
            ->post(
                route('opdrachten.store'),
                [
                    '_token' => $token,
                    'project_name' => $projectName,
                    'image_url' => $imageUrl,
                    'description' => $description
                ]
            );

        $this->assertDatabaseHas(
            'assignments',
            [
                'project_name' => $projectName,
                'image_url' => $imageUrl,
                'description' => $description
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect(route('opdrachten.index'));
    }

    public function testItShowsViewWithCorrectItem() {
        $assignment = Assignment::all()->last();
        $response = $this->get(route('opdrachten.show', $assignment['id']));

        $response->assertStatus(200);
        $response->assertViewIs('assignments.show');
        $response->assertViewHas('assignment');
    }

    public function testItUpdatesLastItemAndRedirectsToIndex() {
        $token = 'lkjh';
        $projectName = 'cursusgewijzigd';
        $imageUrl = 'laravel.png';
        $description = 'een andere cursus';
        $assignment = Assignment::all()->last();

        $response = $this
            ->withSession(['_token' => $token])
            ->patch(
                route('opdrachten.update', $assignment['id']),
                [
                    '_token' => $token,
                    'project_name' => $projectName,
                    'image_url' => $imageUrl,
                    'description' => $description
                ]
            );

        $this->assertDatabaseHas(
            'assignments',
            [
                'id' => $assignment['id'],
                'project_name' => $projectName,
                'image_url' => $imageUrl,
                'description' => $description
            ]
        );

        $response->assertStatus(302);
        $response->assertRedirect(route('opdrachten.index'));

    }

    public function testItDeletesLastItemAndRedirectsToIndex() {
        $token = 'aslkdjg';
        $assignment = Assignment::all()->last()['id'];

        $response = $this
            ->withSession(['_token' => $token])
            ->delete(route('opdrachten.destroy', $assignment));
        $response->assertStatus(302);
        $this->assertDatabaseMissing(
            'assignments',
            [
                'id' => $assignment,
            ]);

        $response->assertStatus(302);
        $response->assertRedirect(route('opdrachten.index'));
    }

}
