<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>Libraryβ版</title>
    <?php
    echo $this->Html->meta('icon');
    echo $this->Html->css('bootstrap.min');
    echo $this->Html->css('common');
    echo $this->Html->script('bootstrap.min');

    echo $this->fetch('meta');
    echo $this->fetch('css');
    echo $this->fetch('script');
    ?>

    <style type="text/css">
        body {
            background: url(/library/img/login.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .panel-default {
            opacity: 0.9;
            margin-top:30px;
        }
        .form-group.last { margin-bottom:0px; }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="/library/users/login" method="post" >
                        <?php
                            echo $this->Session->flash();
                        ?>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">
                                UserID</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="UserID" required name="User[username]">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">
                                Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required name="User[password]">
                            </div>
                        </div>
                        <!--
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"/>
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">
                                    Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">
                                    Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!--
                <div class="panel-footer">
                    Not Registred? <a href="http://www.jquery2dotnet.com">Register here</a>
                </div>
                -->
            </div>
        </div>
    </div>
</div>
</body>
</html>