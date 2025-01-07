<?= $this->extend('backend/backend-pages') ?>
<?= $this->section('content') ?>
<div class="container-fluid py-2">
    <div class="row">
        <div class="col-12">

            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-3 pb-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                                <h6 class="text-white text-capitalize ps-3">Category table</h6>
                            </div>
                            <div class="col-6 d-flex align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
                                    Add Category
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category name</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">N. of sub category</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Ordering</th>
                                        <th class="text-secondary opacity-7"></th>

                                    </tr>
                                </thead>
                                <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm"><?= $key + 1; ?></h6>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0"><?= esc($row['name']); ?></p>

                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm"><?= $row->sub_category_count; ?></h6> <!-- Assuming a field for sub category count -->
                                                </td>
                                                <td>
                                                <p class="text-xs font-weight-bold mb-0"><?= esc($row['ordering']); ?></p>

                                                </td>
                                                <td class="align-middle">
                                                    <a href="" class="text-secondary font-weight-bold text-xs">
                                                        Edit
                                                    </a>
                                                </td>
                                            </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('modals/modals.php') ?>
    <?= $this->endSection() ?>