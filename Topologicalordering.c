#include<stdio.h>
#include<stdlib.h>

#define Max 100

int n;
int adj[Max][Max];
void create_graph();

int queue[Max], front=-1, rear=-1;
void insert_queue(int v);
int delete_queue();
int isEmpty_queue();

int indegree(int v);

int main()
{
    int i,v,count,topo_order[Max],indeg[Max];
    create_graph();
    for(i=1;i<=n;i++)
    {
        indeg[i]=indegree(i);
        if (indeg[i]==0)
        {
            insert_queue(i);
        }
        
    }
    count=0;
    while (!isEmpty_queue()&&count<n)
    {
        v=delete_queue();
        topo_order[++count]=v;
        for (i=1;i<=n;i++)
        {
            if (adj[v][i]==1)
            {
                adj[v][i]=0;
                indeg[i]=indeg[i]-1;
                if(indeg[i]==0)
                {
                    insert_queue(i);
                }
                
            }
            
        }
        
    }
    if (count<n)
    {
        printf("\n No Topological ordering is possible, Graph contains cycle \n");
        exit(1);
    }
    printf("\n Vertices in topological order are : \n ");
    for (i=1;i<=count;i++)
    {
        printf(" %d ",topo_order[i]);
    }
    printf(" \n ");
    return 0;
}
void insert_queue(int vertex)
{
    if(rear==Max-1)
     printf("\n Queue Overflow \n ");
    else
    {
        if(front==-1)
         front=0;
        rear=rear+1;
        queue[rear]=vertex;
    }
}
int isEmpty_queue()
{
    if(front==-1||front>rear)
    {
        return 1;
    }
    else
    return 0;
}
int delete_queue()
{
    int del_item;
    if(front==-1||front>rear)
    {
        printf("\n Queue Underflow \n");
        exit(1);
    }
    else
    {
        del_item=queue[front];
        front=front+1;
        return del_item;
    }
}
int indegree(int v)
{
    int i,in_deg=0;
    for(i=1;i<n;i++)
    {
        if(adj[i][v]==1)
         in_deg++;
    }
    return in_deg;
}
void create_graph()
{
    int i,j,max_edges,orgin,destin;
    printf("\n Enter number of vertices : ");
    scanf("%d",&n);
    max_edges=n*(n-1);
    for (i=1;i<=n;i++)
    {
        printf("\n Enter adjacency matrix row %d : \n ",i);
        for(j=1;j<=n;j++)
        {
            scanf("%d",&adj[i][j]);
        }
    }
    
}