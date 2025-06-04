<?php
require_once 'function.php';

$categories = getAllJobCategories();
?>

<div class="container mt-5">
  <h2>Post a New Job</h2>
  <form action="actions.php?post_job" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="company_image" class="form-label">Company Image</label>
      <input type="file" class="form-control" id="company_image" name="company_image">
    </div>
    <div class="mb-3">
      <label for="company_name" class="form-label">Company Name</label>
      <input type="text" class="form-control" id="company_name" name="company_name" required>
    </div>
    <div class="mb-3">
      <label for="category_id" class="form-label">Job Category</label>
      <select class="form-select" id="category_id" name="category_id" required>
        <option value="">Select a category</option>
        <?php foreach ($categories as $category): ?>
          <option value="<?php echo $category['id']; ?>"><?php echo htmlspecialchars($category['name']); ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="mb-3">
      <label for="title" class="form-label">Job Title</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Job Description</label>
      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label for="salary" class="form-label">Salary</label>
      <input type="text" class="form-control" id="salary" name="salary" required>
    </div>
    <div class="mb-3">
      <label for="company_location" class="form-label">Company Location</label>
      <input type="text" class="form-control" id="company_location" name="company_location" required>
    </div>
    <div class="mb-3">
      <label for="job_location" class="form-label">Job Location</label>
      <input type="text" class="form-control" id="job_location" name="job_location" required>
    </div>
    <div class="mb-3">
      <label for="requirements" class="form-label">Requirements</label>
      <textarea class="form-control" id="requirements" name="requirements" rows="3" required></textarea>
    </div>
    <div class="mb-3">
      <label for="job_type" class="form-label">Job Type</label>
      <select class="form-select" id="job_type" name="job_type" required>
        <option value="">Select job type</option>
        <option value="Full-time">Full-time</option>
        <option value="Part-time">Part-time</option>
        <option value="Contract">Contract</option>
        <option value="Freelance">Freelance</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="job_nature" class="form-label">Job Nature</label>
      <select class="form-select" id="job_nature" name="job_nature" required>
        <option value="">Select job nature</option>
        <option value="On-site">On-site</option>
        <option value="Remote">Remote</option>
        <option value="Hybrid">Hybrid</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit Job Posting</button>
  </form>
</div>

