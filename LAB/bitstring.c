//UniversalSetis{1,2,3,4,5,6,7,8,9}
#include<stdio.h>
voidinput();
voidoutput();
voidsetunion();
voidintersection();
voiddifference();
int a[]={0,0,0,0,0,0,0,0,0},b[]={0,0,0,0,0,0,0,0,0};
int main()
	{
	int ch,wish;
	do
	{
		printf("\n____MENU____\n");
		printf("1.Input\n2.Union\n3.Intersection\n4.Difference\n");
		printf("enterchoice\n");
		scanf("%d",&ch);
		switch(ch)
		{
			case1:input();break;
			case2:setunion();break;
			case3:intersection();break;
			case4:difference();break;
		}
		printf("\nDoyouwishtocontinue?(1/0)\n");
		scanf("%d",&wish);
	}while(wish==1);
}
voidinput()
{	
	int n,x,i;
	printf("entersizeofthe1stset\n");
	scanf("%d",&n);
	printf("enterelements\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&x);
		a[x-1]=1;
	}
	printf("entersizeofthe2ndset\n");
	scanf("%d",&n);
	printf("enterelements\n");
	for(i=0;i<n;i++)
	{
		scanf("%d",&x);
		b[x-1]=1;
	}
	printf("\n1stset\n");
	for(i=0;i<9;i++)
	{
		printf("%d",a[i]);
	}
	printf("\n2ndset\n");
	for(i=0;i<9;i++)
	{
		printf("%d",b[i]);
	}
	}
voidoutput(intc[])
{
	inti;
	printf("\nSetis");
	for(i=0;i<9;i++)
	{
		if(c[i]!=0)
		printf("%d",i+1);
	}
}
voidsetunion()
{
	inti,c[10];
	for(i=0;i<9;i++)
	{	
		if(a[i]!=b[i])
		c[i]=1;
		elsec[i]=a[i];
	}
	for(i=0;i<9;i++)
	{
		printf("%d",c[i]);
	}
	output(c);
}
voidintersection()
{
	inti,c[10];
	for(i=0;i<9;i++)
	{
		if(a[i]==b[i])
		c[i]=a[i];
		elsec[i]=0;
	}
	for(i=0;i<9;i++)
	{
		printf("%d",c[i]);
	}
	output(c);
}
voiddifference()
{
	inti,c[10];
	for(i=0;i<9;i++)
	{
		if(a[i]==1&&b[i]==0)
		c[i]=1;
		elsec[i]=0;
	}
	for(i=0;i<9;i++)
	{
		printf("%d",c[i]);
	}
	output(c);
}