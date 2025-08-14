package com.yohanes;

public class Hero {
    private String name;
    private double health;
    Hero(String name, double health) {
        this.name = name;
        this.health = health;
    }

    public double getHealth(){
        return this.health;
    }

    public String getName() {
        return this.name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setHealth(double health) {
        this.health = health;
    }

    public void display(){
        System.out.println(this.name + "Regular");
    }
}
