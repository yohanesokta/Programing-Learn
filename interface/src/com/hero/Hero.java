package com.hero;

public class Hero implements iAttack {
    private String name;
    private double health;

    public Hero(String name,double health) {
        this.health = health;
        this.name = name;
    }

    public void attack(Hero enemy) {
        System.out.println(this.name + " Attacks => " + enemy.name);
    }

    public void  display() {
        System.out.println("name : " + this.name);
        System.out.println("health : " + this.health);
    }

    public String toString() {
        return "Hero " + this.name;
    }
}
