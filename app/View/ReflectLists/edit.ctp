<div class="row">
    <div class="col-md-10">
        <form action="/reflect/reflectLists/update/<?php echo $user_id . '/' . $week ?>"  method="post">
            <fieldset>
                <legend>報告</legend>

                <div class="form-group">
                    <label>案件状況</label>
                    <textarea name="project_situation" class="form-control" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <label>営業情報</label>
                    <textarea name="sales_information" class="form-control" rows="2"></textarea>
                </div>

                <div class="form-group">
                    <label>勤怠連絡</label>
                    <textarea name="attendance" class="form-control" rows="2"></textarea>
                </div>
            </fieldset>

            <fieldset style="margin-top: 25px">
                <legend>KPT</legend>
                <div class="form-group">
                    <label>Keep</label>
                    <textarea name="keep" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Problem</label>
                    <textarea name="problem" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label>Try</label>
                    <textarea name="try" class="form-control" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-success">登録</button>
            </fieldset>
        </form>
    </div class="col-md-6">
</div>