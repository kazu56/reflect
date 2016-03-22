<div class="row">
    <div class="col-md-10">
            <fieldset>
                <legend>報告</legend>

                <div class="form-group">
                    <label>案件状況</label>
                    <pre><?php echo $reflect_list['ReflectList']['project_situation']; ?></pre>
                </div>

                <div class="form-group">
                    <label>営業情報</label>
                    <pre><?php echo $reflect_list['ReflectList']['sales_information']; ?></pre>
                </div>

                <div class="form-group">
                    <label>勤怠連絡</label>
                    <pre><?php echo $reflect_list['ReflectList']['attendance']; ?></pre>
                </div>
            </fieldset>

            <fieldset style="margin-top: 25px">
                <legend>KPT</legend>
                <div class="form-group">
                    <label>Keep</label>
                    <pre><?php echo $reflect_list['ReflectList']['keep']; ?></pre>
                </div>

                <div class="form-group">
                    <label>Problem</label>
                    <pre><?php echo $reflect_list['ReflectList']['problem']; ?></pre>
                </div>

                <div class="form-group">
                    <label>Try</label>
                    <pre><?php echo $reflect_list['ReflectList']['try']; ?></pre>
                </div>
            </fieldset>
    </div class="col-md-6">
</div>