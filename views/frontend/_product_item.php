<?php
/* @Var \app\models\Posts $model */
?>
<div class="col-xl-4 col-md-4">
    <div class="card hover-translate-y-n3 hover-shadow-lg overflow-hidden text-right">
        <div class="position-relative overflow-hidden">
            <a href="<?= Yii::$app->urlManager->createUrl(['frontend/blog', [
                'id' => $model->id,
                'tag' => str_replace(' ', '-', $model->title_fa)
            ]]) ?>" class="d-block">
                <img alt="Image placeholder"
                     src="<?= Yii::$app->params['baseUrl'] . '/web/uploads/' . $model->cover_file ?>"
                     class="card-img-top"></a></div>
        <div class="card-body py-4"><small class="d-block text-sm mb-2">ساعت‌انتشار : <?= $model->created_at ?></small>
            <a href="#"
               class="h5 stretched-link lh-150"><?= $model->title_fa ?></a>
            <p class="mt-3 mb-0 lh-170"><?= $model->title_en ?></p></div>
        <div class="card-footer border-0 delimiter-top">
            <div class="row align-items-center">
                <div class="col-auto"><span class="avatar avatar-sm bg-primary rounded-circle"><?=substr($model->user->profile->full_name,0,4)?></span> <span
                            class="text-sm mb-0 avatar-content"><?= $model->user->profile->full_name ?></span></div>
                <div class="col text-right text-right">
                    <div class="actions"><a href="#" class="action-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-heart mr-1">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                            <?= $model->count_like ?></a> <a href="#" class="action-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-eye mr-1">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>
                            <?= $model->count_view ?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
