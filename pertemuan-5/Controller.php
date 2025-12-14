<?php 
class BaseController { 
public static function route(): void { 
echo "Routing di BaseController\n"; 
} 
public static function handle(): void {
    self::route();
}

} 
class UserController extends BaseController { 
public static function route(): void { 
echo "Routing di UserController\n"; 
} 
} 
UserController::handle();

class AdminController extends UserController {
    public static function route(): void {
        echo "Routing di AdminController\n";
    }
}

AdminController::handle();
