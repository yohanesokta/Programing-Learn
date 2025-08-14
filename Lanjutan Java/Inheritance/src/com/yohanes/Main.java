package com.yohanes;

// super class, parrent class, base class
class Hero {
    String name;

    void display() {
        System.out.println(this.name);
    }
}

// sub class, child class
class HeroStrom extends Hero {

}

class HeroIntelegent extends Hero {

}


public class Main {
    public static void main(String[] args) {
        Hero hero1 = new Hero();
        hero1.name = "yohanes";
        hero1.display();

        HeroStrom hero2 = new HeroStrom();
        hero2.display();

        HeroIntelegent hero3 = new HeroIntelegent();
        hero3.name = "oktanio";
        hero3.display();
    }
}
