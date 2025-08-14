package com.yohanes;

public class HeroAgility extends Hero {
    public String type = "Agility";
    public HeroAgility(String name, double health) {
        super(name,health);
        this.type = "Agility";
    }

    public void display() {
        System.out.println(this.getName() + " is an " + this.type + " Hero");
    }
}
