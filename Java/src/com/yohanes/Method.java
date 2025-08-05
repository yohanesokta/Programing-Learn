public class Method {
    public static void main(String[] args) {
        sayHello("Yohanes");
        sayHello("Yohanes");

        final int fungsiFirst = hitungFungsi(5);
        System.out.println(fungsiFirst);

    }

    private static void sayHello(String name) {
        System.out.println("Hallo Hay " + name);
    }

    private static int hitungFungsi (int number) {
        return (number + 2) * number;
    }
}
