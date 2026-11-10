<?php
namespace Database\Seeders;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
class DatabaseSeeder extends Seeder {
 public function run(): void {
  User::create(['username' => 'alex.rivera', 'full_name' => 'Alex Rivera', 'email' => 'alex.rivera@example.com']);
  $today = Carbon::today();
  foreach ([
   ['Plan the week', 'completed', -2],
   ['Review lecture notes', 'completed', -1],
   ['Check project requirements', 'pending', 0],
   ['Complete Laravel migration', 'completed', 0],
   ['Build task list page', 'in progress', 0],
   ['Prepare class presentation', 'pending', 0],
   ['Test all four pages', 'pending', 1],
   ['Submit project repository', 'pending', 2],
  ] as [$title, $status, $offset]) {
   Task::create(['title' => $title, 'status' => $status, 'task_date' => $today->copy()->addDays($offset)->toDateString()]);
  }
 }
}
