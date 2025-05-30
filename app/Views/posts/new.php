<?= $this->extend('templates\main') ?>

<?= $this->section('content') ?>


<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 ">
        <div class="card-body p-3 p-md-4 p-xl-5">

            <div class="text-center mb-3">
                <h2 class="fw-normal text-center  mb-4">Create new Post</h2>
                <p class="text-secondary">Please fill this form and submit to add post record.</p>
            </div>

            <form action="<?= url_to('Posts::create') ?>" method="post">
                <?= csrf_field() ?>

                <div class="row gy-2 overflow-hidden">

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <input type="text" name="title" id="title" placeholder="Title" required
                                class="form-control <?= !empty(session()->getFlashdata('errors')['title']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('title') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['title'] ?? '' ?></span>
                            <label for="title">Title</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <textarea id="contend" name="contend" rows="10" cols="500" placeholder="Contend" required
                                class="form-control
                                <?= !empty(session()->getFlashdata('errors')['contend']) ? 'is-invalid' : '';
                                ?>"
                                style="height: 200px;"><?= set_value('contend') ?? ''; ?></textarea>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['contend'] ?? '' ?></span>
                            <!-- <label for="contend">Contend</label> -->
                        </div>
                    </div>

                    <script>
                        new FroalaEditor('#contend', {
                            heightMin: 300,
                            faButtons: ["fontAwesomeBack", "|"],

                            height: 300,
                            charCounterMax: 4000,
                            toolbarButtons: ['bold', 'italic', 'underline', 'paragraphFormat', 'fontSize', 'align', 'insertLink', 'insertImage'],
                        })
                    </script>

                    <div class="col-12">
                        <div class="form-floating mb-4">
                            <?php
                            $options = [
                                'draft' => 'draft',
                                'pending' => 'pending for publication',
                                'publish' => 'publish',
                            ];

                            $css = [
                                'class' => 'form-select form-control',
                            ];

                            $selected = set_value('status') ?? '';
                            echo form_dropdown('status', $options, $selected, $css);
                            ?>
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['status'] ?? '' ?></span>
                            <label for="status">Status</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-3">
                            <input type="password" name="password_sign" id="password_sign" required
                                placeholder="Password Sign"
                                class="form-control <?= !empty(session()->getFlashdata('errors')['password_sign']) ? 'is-invalid' : ''; ?>"
                                value="<?= set_value('password_sign') ?? ''; ?>">
                            <span class="invalid-feedback"><?= session()->getFlashdata('errors')['password_sign'] ?? '' ?></span>
                            <label for="password_sign">Password Sign</label>
                        </div>
                    </div>

                    <div class="d-grid gap-5 d-md-flex justify-content-center mx-auto mt-5">
                        <?= view_cell('Button::submit', ['label' => 'Submit']) ?>
                        <?= view_cell('Button::back', ['label' => 'Cancel']) ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>