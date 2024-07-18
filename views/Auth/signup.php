<title>Register Form</title>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="./ajax/Auth/register.php" method="post" enctype="multipart/form-data" class="form-center border border-primary p-4">
                    <h2 class="text-center mb-4">Register Form</h2>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Phone:</label>
                        <div class="col-sm-9">
                            <input type="tel" class="form-control" name="phone" required  pattern="[0-9]{3}[-. ]?[0-9]{3}[-. ]?[0-9]{4}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Birthday:</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" name="birthday" required min="18">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Profile Image:</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="image" accept="image/*">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Address:</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" required pattern=".{8,}">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Confirm-Password:</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="confirm-password" required pattern=".{0,}|^$|^[a-zA-Z0-9]+$" oninvalid="this.setCustomValidity('Passwords do not match.')">
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Role ID</label>
                        <div class="col-sm-9">
                            <select id="role_id" class="form-control" name="role_id" required>
                                <option value="">Select a role</option>
                                <option value="1">Admin</option>
                                <option value="2">Moderator</option>
                                <option value="3">User</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Status:</label>
                        <div class="col-sm-9">
                            <select id="status" name="status"class="form-control" required>
                                <option value="">Select a status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Create Date</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="create_date">
                        </div>
                    </div>
                    <div class="form-group text-center mb-3">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
