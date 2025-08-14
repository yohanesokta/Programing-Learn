import java.util.Arrays;

public class ArrayChallenge {
    public static void main(String[] args) {
        System.out.println("---short data---");
        int[] arrayNumbers = {1,5,2,3,6,10};
        shorting(arrayNumbers);
        System.out.println(Arrays.toString(arrayNumbers));
        System.out.println("---sum data---"); 
        sumArray(arrayNumbers);
        System.out.println(Arrays.toString(arrayNumbers));
        System.out.println("---gabungkan data---");
        int[] arrayNumbers2 = {1,5,2,3,6,10};
        int[] arrayNumbers3 = {1,4,5,3,6,10,28,51,23,45};
        int[] arrayAngka =  gabungArray(arrayNumbers3, arrayNumbers2);
        System.out.println(Arrays.toString(arrayAngka));
    }

    private static int[] gabungArray(int[] array1, int[] array2) {
        final int longArray = array1.length + array2.length;
        int[] result = Arrays.copyOf(array1, longArray);
        for (int i = array1.length; i < longArray; i++) {
            result[i] = array2[i-array1.length];
        }
        return result;
    }

    private static void sumArray(int[] arrayData) {
        for(int i=0; i < arrayData.length; i++) {
            int sum = arrayData[i] * 2;
            arrayData[i] = sum;
        }
    }

    private static void shorting(int[] arrayData) {
        for (int i = 0; i < arrayData.length; i++) {
            int bigIndex = i;
            for (int j=i; j < arrayData.length; j++) {
                if (arrayData[j] > arrayData[bigIndex] ) {
                    bigIndex = j;
                }
            }
            int temp = (int) arrayData[i];
            int big = (int) arrayData[bigIndex];
            System.out.println("Temp : " + temp + "| Big : " + big);
            arrayData[i] = big;
            arrayData[bigIndex] = temp;
        }
    }
}
