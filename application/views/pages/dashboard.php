<h1>Dashboard</h1>
<form method="post" action="<?php echo base_url('users/signout'); ?>">
<div>
    <button type="submit" class="btn btn-primary">Signout</button>
    <a type="button" class="btn btn-success" href="<?php echo base_url('users/edit') ?>">Edit</a>
</div>
</form>

<table class="table table-success table-striped">
    <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">Name</th>
            <th scope="col">@username</th>
            <th scope="col">Contact</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- Pass Data -->
            <th scope="row">1</th>
            <td>passdata</td>
            <td>passdata</td>
            <td>passdata</td>
            <td>
                <div>
                    <div>
                        <button type="button" class="btn btn-danger">Remove</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-success">Success</button>
                    </div>
                    <div>
                    <button type="button" class="btn btn-primary">Primary</button>
                    </div>

                </div>
            </td>
        </tr>
    </tbody>
</table>
