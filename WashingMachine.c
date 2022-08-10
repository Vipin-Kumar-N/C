#include<stdio.h>
#include<conio.h>
int main()
{
    int weight;
    printf("Enter the loaded Weight");
    scanf("%d",&weight);
    if(weight>0)
    {
        if(weight>7000)
        printf("Overload");
        else if(weight>4000)
        printf("Time Required is 45min");
        else if(weight>2000)
        printf("Time Required is 35min");
        else
        printf("Time Required is 25min");
        
    }
    else
    printf("Invalid Sensor Report");
}
