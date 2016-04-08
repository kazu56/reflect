<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="row" style="margin-top: 50px">
            <p>
                <a href="/reflect/AllMembers/show/20160404">20160404週</a>
            </p>
            <p>
                <a href="/reflect/AllMembers/show/20160328">20160328週</a>
            </p>
                </div>
        </div>
        <div class="col-md-10">
            <h3><?php echo $week ?>週</h3>
            
            <?php foreach(['高石'=>'takaishi','盛'=>'mori','川口'=>'kawaguti'] as $kanzi=>$name):?>
            <div class="row" style="margin-top: 25px">
                <h4><?php echo $kanzi;?></h4>
                <table class="table table-bordered table-condensed">
                    <tbody>
                    <?php
                    $item_list = [
                        'project_situation'=>'案件状況',
                        'sales_information'=>'営業情報',
                        'attendance'=>'勤怠等連絡'
                    ];
                    foreach($item_list as $key => $value):
                    ?>
                    <tr>
                        <th style="width: 150px;background-color:#eef6ea"><?php echo $value?></th>
                        <td><?php echo nl2br(Hash::get($reflect_list,$name . '.ReflectList.' . $key));?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <?php endforeach?>
        </div>
    </div>
</div>