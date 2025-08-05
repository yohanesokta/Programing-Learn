import java.util.Arrays;

public class Array {
    public static void main(String[] args) {
       int[] arrayInteger = {1,2,3,4};
       for (int arrayInteger2 : arrayInteger) {
        System.out.println(arrayInteger2);
       }

       float[] arrayFloats = new float[5];
       for (float arrayFloat : arrayFloats) {
            System.out.println(arrayFloat);
       }

       System.out.println(Arrays.toString(arrayFloats));
    }
}

